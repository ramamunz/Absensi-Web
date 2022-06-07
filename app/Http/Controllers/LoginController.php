<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('Login', [
            'title' => 'Login'
        ]);
    }

    public function login(Request $request)
    {
        $inputan = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        $level = DB::table('users')->where('email', $inputan['email'])->value('level');

        if ($level == 'Admin') {
            if (Auth::attempt($inputan)) {
                $request->session()->regenerate();
                return redirect()->intended('/admin');
            }

            return back()->with('errorLogin', 'Login Gagal !');
        } else if ($level == 'Pegawai') {
            if (Auth::attempt($inputan)) {
                $request->session()->regenerate();
                return redirect()->intended('/profil');
            }

            return back()->with('errorLogin', 'Login Gagal !');
        }

        return back()->with('errorLogin', 'Login Gagal !');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
