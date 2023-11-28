<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerpusController extends Controller
{
    function viewHome()
    {
        // Elloquent ORM
        // $pengaduan = Pengaduan::where('nik', Auth::user()->nik)->get();

        // return view('/home', ["pengaduan" => $pengaduan]);
        return view('/home');
    }
}
