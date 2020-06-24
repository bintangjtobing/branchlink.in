<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/administrator';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm()
    {
        return view('login.signin');
    }
    protected function validateLogin(Request $request)
    {
        $tokens = str_random(50);
        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
            'status' => 'active',
        ])) {
            return redirect('/administrator');
        }
        return back()->with('gagal', 'Otorisasi keanggotaan gagal atau silahkan cek kembali username atau password anda.');
    }
    protected function attemptLogin(Request $request)
    {
        $request->merge(['status' => 'A']);
        return $this->guard()->attempt(
            $this->credentials($request),
            $request->filled('remember')
        );
    }
    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password', 'status');
    }
    public function logout($id)
    {
        Auth::logout();
        return redirect('/login');
    }
}
