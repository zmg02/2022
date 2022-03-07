<?php

namespace App\Admin\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * 用户认证通过.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     * method authenticate
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email','password');
        $email = $request->email;
        $password = $request->password;

        dd(Auth::guard('web')->attempt($credentials));
        if (Auth::attempt(['email'=>$email, 'password'=>$password, 'is_admin'=>1])) {
            return redirect()->intended('/admin/home');
        }
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        // $request->session()->flush();
        // $request->session()->regenerate();
        $request->session()->invalidate();

        $path = route('login');
        if ($request->pjax()) {
            return "<script>location.href = '$path';</script>";
        }

        return redirect($path);
    }

        /**
     * Handle a login request.
     *
     * @param Request $request
     *
     * @return mixed
     */
    // public function login(Request $request)
    // {

    // }



    protected function username()
    {
        return 'name';
    }


    // protected function guard()
    // {
    //     return Auth::guard();
    // }

}
