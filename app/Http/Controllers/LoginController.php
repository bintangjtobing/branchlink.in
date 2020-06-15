<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected function validateLogin(Request $request)
    {
        $tokens = str_random(50);
        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
            'status' => 'active',
        ])) {
            return redirect('/dashboard');
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
