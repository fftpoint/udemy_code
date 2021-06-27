<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UserLoginController extends Controller
{
    public function index()
    {
        return view('mypage/login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email:filter'],
            'password' => ['required'],
        ]);

        if (! Auth::attempt($data)) {
            throw ValidationException::withMessages(['email' => 'メールアドレスかパスワードが間違っています。']);
        }

        return redirect('mypage/blogs');
    }

    public function logout(Request $request)
    {
        Auth::logout();;

        $request->session()->invalidate();

        $request->session()->regenerate();

        return redirect('mypage/login')->with(['status' => 'ログアウトしました。']);
    }
}
