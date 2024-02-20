<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PerpusController extends Controller
{
    function viewHome()
    {
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
            'Isi' => 'required|min:10',
            'Sampul' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $nama_sampul = $request->Sampul->getClientOriginalName();

        $request->Sampul->storeAs('public/image', $nama_sampul);

        $Judul_buku = $request->Judul;
        $Penulis_buku = $request->Penulis;
        $Penerbit_buku = $request->Penerbit;
        $Tahun = $request->TahunTerbit;
        $Isi = $request->Isi;

        Buku::create([
            'Judul' => $Judul_buku,
            'Penulis' => $Penulis_buku,
            'Penerbit' => $Penerbit_buku,
            'TahunTerbit' => $Tahun,
            'Isi' => $Isi,
            'Sampul' => $request->Sampul->getClientOriginalName(),
        ]);

        return redirect('/library');
    }

    function bookDetails($id)
    {
        $buku = Buku::with('kategori')->find($id);
        return view('/bookdetails', ['buku' => $buku]);
    }

    function hapus($id)
    {
        // DB::table('pengaduan')->where('id_pengaduan','=',$id)->delete();
        Buku::where('BukuID', '=', $id)->delete();
        return redirect('/library');
    }

    function store(Request $request, $id)
    {
        $today = date('Y-m-d');
        $date_after_2_days = date('Y-m-d', strtotime($today . ' +2 days'));
        DB::table('peminjaman')->insert(
            [
                'UserID' => Auth()->user()->id,
                'BukuID' => $id,
                'TanggalPeminjaman' => $today,
                'TanggalPengembalian' => $date_after_2_days,
                'StatusPerminjaman' => "Pending",
            ]
        
        );

        return redirect()->back()->with('Info', 'Buku sudah di pinjam');
    }
}