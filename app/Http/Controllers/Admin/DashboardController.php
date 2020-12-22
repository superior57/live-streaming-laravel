<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\SessionSetting;
use App\Message;


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
        // dd(session());
        $redirectTo = \Request::path();
        $sessions = SessionSetting::find(1);
        if($redirectTo === "dashboard") {     
            $messages_awaiting = Message::where([
                'AWAITING' => 1
            ])->orderby('M_CODE', 'DESC')->get();

            
            return view('admin.'.$redirectTo, [
                'sessions' => $sessions,
                'messages_awaiting' => $messages_awaiting
            ]);
        } else {
            return view('admin.'.$redirectTo, [
                'sessions' => $sessions
            ]);
        }       
        
    }

    public function updateSession(Request $request)
    {
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
}
