<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\User;

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
    public function registeraccount(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|unique:users|min:5|regex:/^\S*$/u',
            'email' => 'required|unique:users|email',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->unpassword = $request->password;
        $user->status = 'unactive';
        $user->save();
        return redirect('/login')->with('sukses', 'You have already signup your account! Now try to login it!');
    }
}
