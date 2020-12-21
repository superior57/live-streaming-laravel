<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;

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

    // // public function login(Request $request)
    // // {
    // //     $credentials = $request->only('email', 'password');

    // //     if (Auth::attempt($credentials)) {
    // //         // Authentication passed...
    // //         if (auth()->check()) {
    // //             if (auth()->user()->UR_CODE == 1) {
    // //                 $U_ID = auth()->user()->id;
    // //                 $user = User::find($U_ID);
    // //                 $user->last_session = session_id();
    // //                 $user->save();
    // //                 return redirect(route('dashboard'));
    // //             }
    // //             else if(auth()->user()->UR_CODE == 2) {
    // //                 return redirect('/home');
    // //             }
    // //             else {
    // //                 return redirect(route('admin_home'));
    // //             }
    // //         } else {
    // //             return redirect(route('admin_home'));
    // //         }
    // //     }
    // }
}
