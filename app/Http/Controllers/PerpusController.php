<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
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
            'Deskripsi' => 'required|min:20',
            'Sampul' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $nama_sampul = $request->Sampul->getClientOriginalName();

        $request->Sampul->storeAs('public/image', $nama_sampul);

        $Judul_buku = $request->Judul;
        $Penulis_buku = $request->Penulis;
        $Penerbit_buku = $request->Penerbit;
        $Tahun = $request->TahunTerbit;
        $Deskripsi = $request->Deskripsi;

        Buku::create([
            'Judul' => $Judul_buku,
            'Penulis' => $Penulis_buku,
            'Penerbit' => $Penerbit_buku,
            'TahunTerbit' => $Tahun,
            'Deskripsi' => $Deskripsi,
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

    function viewEditBuku($id)
    {
        $buku = Buku::with('kategori')->find($id);
        return view('admin/edit_buku', ['buku' => $buku]);
    }

    function edit(Request $request, $id)
    {
        $request->validate([
            'Judul' => 'required|min:2',
            'Penulis' => 'required|min:3',
            'Penerbit' => 'required|min:4',
            'TahunTerbit' => 'required|date|before_or_equal:now',
            'Isi' => 'required|min:10',
            // Add validation rules for other fields if needed
        ]);

        $buku = Buku::findOrFail($id);
        // dd($buku);
        // return $buku;

        $buku->Judul = $request->Judul;
        $buku->Penulis = $request->Penulis;
        $buku->Penerbit = $request->Penerbit;
        $buku->TahunTerbit = $request->TahunTerbit;
        $buku->Isi = $request->Isi;


        $buku->save();

        return back()->with('success', 'Book updated successfully.');
    }


    function pinjam(Request $request, $id)
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
