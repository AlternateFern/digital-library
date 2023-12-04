<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class PerpusController extends Controller
{
    function viewHome()
    {
        // Elloquent ORM
        // $pengaduan = Pengaduan::where('nik', Auth::user()->nik)->get();

        // return view('/home', ["pengaduan" => $pengaduan]);
        return view('/home');
    }

    function viewLibrary()
    {
        $buku = Buku::All();
        return view('/library', compact('buku'));
    }
}
