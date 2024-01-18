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

    function viewTambahBuku()
    {
        return view('admin/admin_tambahbuku');
    }

    function bookDetails($id){
        $buku = Buku::where('BukuID', $id)->get();
        return view('/bookdetails', ['buku' => $buku]);
    }

}