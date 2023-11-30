<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    function viewRegister()
    {
        return view('register');
    }

    function register(Request $request)
    {
            DB::table('user')->insert([
                'username' => $request->username,
                'email' => $request->email,
                'namaLengkap' => $request->namaLengkap,
                'alamat' => $request->alamat,
                'password' => bcrypt($request->password),
                'role' => 'peminjam'
            ]);

            return redirect('/login')->with('success', 'Registration successful!');
            // return redirect('/register')->with('error', 'Registration Failed.');
        }
    }

