<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;

class loginControllers extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin',['except'=>'logout']);
    }

    public function formLogin()
    {
        return view('login.login');
    }

    public function proseslogin(Request $request)
    {

        $credentials = $request->validate([
            'username_admin'=>'required',
            'password'=>'required'
        ]);


        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/admin')->with('massage4', 'selamat datang di admin page');
        }

        return back()->withErrors([
            'username_admin' => 'bre login pake akun admin yang ada.',
            'password' => 'passwordnya salah bre.',
        ]);

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerate();

        return redirect('/');
    }
}
