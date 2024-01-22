<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Facades\Auth;

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

    function proses_tambah_buku(Request $request)
    {
        $request->validate([
            'Judul' => 'required|min:2',
            'Penulis' => 'required|min:3',
            'Penerbit' => 'required|min:4',
            'Sampul' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $nama_sampul = $request->Sampul->getClientOriginalName();

        $request->Sampul->storeAs('public/image', $nama_sampul);

        $Judul_buku = $request->Judul;
        $Penulis_buku = $request->Penulis;
        $Penerbit_buku = $request->Penerbit;
        $Tahun = $request->TahunTerbit;

        Buku::create([
            'Judul' => $Judul_buku,
            'Penulis' => $Penulis_buku,
            'Penerbit' => $Penerbit_buku,
            'TahunTerbit' => $Tahun,
            'Sampul' => $request->Sampul->getClientOriginalName(),
            // 'Sampul' => '0',
        ]);

        return redirect('/library');
    }

    function bookDetails($id){
        $buku = Buku::where('BukuID', $id)->get();
        return view('/bookdetails', ['buku' => $buku]);
    }

    function hapus($id)
    {
        // DB::table('pengaduan')->where('id_pengaduan','=',$id)->delete();
        Buku::where('BukuID', '=', $id)->delete();
        return redirect()->back();
    }
}