<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\CSVUser;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    function verifyCSVUser($credentials)
    {  
        $CSVUser = new CSVUser();
        $data = $CSVUser->getUserList();
        if(array_key_exists($credentials['email'], $data)) {
            $user = $data[$credentials['email']];
            $password = $user['password'];
            if($password == $credentials['password']) {
                return $user;
            } else {
                return false;
            }
        }
        return false;        
    }

    

    public function login(Request $request)
    {
        $usertype = $request->input('usertype');
        $credentials = $request->only('email', 'password');
        
        if($usertype === "client") {
            if($this->verifyCSVUser($credentials) != false) {
                $user = $this->verifyCSVUser($credentials);
                // Auth::login($user['email'], TRUE);
                return redirect('/home');
            } else return back()->with('error', "No matches records");
        } else {
            if (Auth::attempt($credentials)) {
                // Authentication passed...
                if (auth()->check()) {
                    if (auth()->user()->UR_CODE == 1) {
                        $user = User::find(auth()->user()->id);
                        $user->last_session = \Session::getId();
                        $user->save();                        
                        return redirect(route('dashboard'));
                    }
                    else {
                        return redirect(route('admin_home'));
                    }
                } else {
                    return redirect(route('admin_home'));
                }
            }
        }
        
    }
}
