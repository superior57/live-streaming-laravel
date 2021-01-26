<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\SessionSetting;
use App\Message;
use App\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    //

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
  

    public function index() {   
        
        // dd(session_id());     
        $redirectTo = \Request::path();
        $sessions = SessionSetting::find(1);

        if($redirectTo === "dashboard") {     
            return view('admin.'.$redirectTo, [
                'sessions' => $sessions
            ]);
        } else if($redirectTo === "users"){
            $user_list = User::where([
                'UR_CODE' => 2
            ])->paginate(10);
            return view('admin.'.$redirectTo, [
                'sessions' => $sessions,
                'user_list' => $user_list
            ]);
        }       
        
    }

    public function updateSession(Request $request)
    {
        $this->destorySessionIfDifferent();
        $data = $request->except('_token');
        $return = array(
            'message' => ""
        );
        $sessions = SessionSetting::find(1);
        foreach($data as $key => $value) {
            $sessions->$key = $value;
        }
        $sessions->save();        
        $return['message'] = "OK";
        return response()->json($return);
    }

    public function getSession(Request $request)
    {
        $sessions = SessionSetting::find(1);
        return response()->json($sessions);
    }    

    function getAwaitingMessage($per_page, $page_num)
    {
        $this->destorySessionIfDifferent();
        return Message::where([
            'AWAITING' => 1,
            'is_delete' => 0
        ])->with('user')->orderby('M_CODE', 'DESC')->paginate($per_page, ['*'], 'Awaiting Messages', $page_num);
    }

    function getApprovedMessage($per_page, $page_num)
    {
        if($per_page == 0 && $page_num == 0) {
            return Message::where([
                'approved' => 1,
                'is_delete' => 0
            ])->with(['user', 'answerUser'])->orderby('M_CODE', 'asc')->get();
        }
        return Message::where([
            'approved' => 1,
            'is_delete' => 0
        ])->with('user')->orderby('M_CODE', 'DESC')->paginate($per_page, ['*'], 'Approved Messages', $page_num);
    }

    function getDisapprovedMessage($per_page, $page_num)
    {
        $this->destorySessionIfDifferent();
        return Message::where([
            'approved' => 0,
            'AWAITING' => 0,
            'is_delete' => 0
        ])->with('user')->orderby('M_CODE', 'DESC')->paginate($per_page, ['*'], 'Disapproved Messages', $page_num);
    }

    public function getMessage(Request $request, $status, $per_page, $page_num)
    {
        $messages = "";
        if($status === "awaiting") {
            $messages = $this->getAwaitingMessage($per_page, $page_num);
        } else if($status === "approved") {
            $messages = $this->getApprovedMessage($per_page, $page_num);
        } else if($status === "disapproved") {
            $messages = $this->getDisapprovedMessage($per_page, $page_num);
        }

        return response()->json([
            'messages' => $messages
        ]);
    }

    public function getUsers(Request $request, $per_page, $page_num)
    {
        $this->destorySessionIfDifferent();
        $user_list = User::where([
            'UR_CODE' => 2,
            'is_delete' => 0
        ])->orderby('id', 'DESC')->paginate($per_page, ['*'], 'Users', $page_num);

        return response()->json([
            'user_list' => $user_list
        ]);
    }

    public function messageToApprove($message_id) {
        View::share('status_msg', 'updated');     
        $message = Message::find($message_id);
        $message->approved = 1;
        $message->AWAITING = 0;
        $message->save();        
        return response()->json([
            'message' => "Approved a message successfully.",
            'data' => $message
        ]);
    }

    public function messageToDisapprove($message_id) {
        $message = Message::find($message_id);
        $message->approved = 0;
        $message->AWAITING = 0;
        $message->save();        
        return response()->json([
            'message' => "Disapproved a message successfully.",
            'data' => $message
        ]);
    }

    public function messageAnswer(Request $request, $message_id) {        
        $message = Message::find($message_id);
        $message->ANSWER = $request->all()['answer'];
        $message->ANSWER_U_ID = auth()->user()->id;
        $message->save();        
        return response()->json([
            'message' => "Saved an answer successfully.",
            'data' => $message
        ]);
    }

    public function getMessageDetail($message_id) {        
        $message = Message::with('user')->find($message_id);              
        return response()->json([
            'message' => $message
        ]);
    }

    function destorySessionIfDifferent()
    {
        $cur_session = \Session::getId();
        $user = User::find(auth()->user()->id);
        $last_session = $user->last_session;
        if($cur_session != $last_session) {
            auth()->logout();
            return response('Logout', 509);
        }
    }

    public function uploadUserList(Request $req)
    {
        try{
            $file = $req->file('user_list');
            $row = 1;
            $array = [];
            $header = [
                'name',
                'email',
                'password'
            ];
            if (($handle = fopen($file, "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    if($row != 1) {
                    $num = count($data);
                    $array = [];
                    for ($c=0; $c < $num; $c++) {
                        $array[] =  $data[$c];                     
                    }
                        $array2[] =  array_combine($header, $array);                     
                    }
                    $row ++;
                }
                fclose($handle);
            }  

            $data = [];
            foreach($array2 as $key => $value) {
                $value['password'] = Hash::make($value['password']);
                $value['UR_CODE'] = 2;
                $value['is_delete'] = 0;
                $data[] = $value;
            }
            // $users = User::where('UR_CODE', 2)->get();          
            // foreach($users as $user) {
            //     $user->is_delete = 1;
            //     $user->save();
            // }  
            User::where('UR_CODE', 2)->delete();
            Message::query()->update(['is_delete' => 1]);
            User::insert($data);
            return back()->with("success", "file has been stored successfully");
        } catch(Throwable $e) {
            dd('123');
            return back()->with('error', $e);
        }
    }

}
