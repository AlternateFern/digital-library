<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function viewLogin()
    {
        return view('login');
    }

    function login(Request $request)
    {   
        $dataLogin = $request->only("username", "password");
        // dd($dataLogin);
        if (Auth::attempt($dataLogin) && Auth::user()->role === 'peminjam') {
            return redirect('/home');
        } else {
            return redirect()->back()->with("error", "Username atau Password Salah");
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    function viewLoginAdmin()
    {
        return view('admin/admin_login');
    }

    function loginAdmin(Request $request)
    {   
        $dataLogin = $request->only("username", "password");
        if (Auth::attempt($dataLogin) && in_array(Auth::user()->role, ['admin', 'petugas'])) {
            return redirect('/home');
        } else {
            return redirect()->back()->with("error", "Username atau Password Salah");
        }
    }

    function logoutAdmin()
    {
        Auth::logout();
        return redirect('admin/login');
    }
}
