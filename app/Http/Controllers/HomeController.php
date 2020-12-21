<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\SessionSetting;
use App\Message;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $prev_url = explode('/', url()->previous());
        $prev_url = $prev_url[count($prev_url) - 1];
        // dd($prev_url);
        if(auth()->user()->UR_CODE == 1 && $prev_url != "welcome") {
            return redirect(route('dashboard'));          
        }
        else if (auth()->user()->UR_CODE == 2 && $prev_url != "admin_home") {
            $sessions = SessionSetting::find(1);
            return view('home', [
                'sessions' => $sessions
            ]);
        } else {
            auth()->logout();
            return redirect(route($prev_url));
        }
    }

    public function sendMessage(Request $request)
    {
        $data = $request->except('_token');
        // dd();
        $message = new Message();
        $message->MESSAGE = $data["message"];
        $message->U_ID = auth()->user()->id;
        $message->approved = 0;
        $message->ANSWER = "";
        $message->save();
        return response()->json([
            "message" => "OK"
        ]);
    }
}
