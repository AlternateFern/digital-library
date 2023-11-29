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
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'NamaLengkap' => $request->NamaLengkap,
                'Alamat' => $request->Alamat,
                'role' => 'peminjam'
            ]);

            return redirect('/login')->with('success', 'Registration successful!');
            // return redirect('/register')->with('error', 'Registration Failed.');
        }
    }

