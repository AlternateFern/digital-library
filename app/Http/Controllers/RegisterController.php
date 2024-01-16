<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function viewRegister()
    {
        return view('register');
    }

    function register(Request $request)
    {
            DB::table('users')->insert([
                'username' => $request->username,
                'email' => $request->email,
                'namaLengkap' => $request->namaLengkap,
                'alamat' => $request->alamat,
                'password' => Hash::make($request->password),
                'role' => 'peminjam'
            ]);

            return redirect('/login')->with('success', 'Registration successful!');
            // return redirect('/register')->with('error', 'Registration Failed.');
        }

        function viewRegisterAdmin()
    {
        return view('admin/admin_register');
    }

    function registerAdmin(Request $request)
    {
            DB::table('users')->insert([
                'username' => $request->username,
                'email' => $request->email,
                'namaLengkap' => $request->namaLengkap,
                'alamat' => $request->alamat,
                'password' => Hash::make($request->password),
                'role' => 'admin'
            ]);

            return redirect('admin/login')->with('success', 'Registration successful!');
            // return redirect('/register')->with('error', 'Registration Failed.');
        }
    }

