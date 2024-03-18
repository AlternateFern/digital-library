<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\User;

class PeminjamanController extends Controller
{
    public function listPinjam()
    {
        $list = Peminjaman::with(['buku', 'user'])
                ->where('StatusPeminjaman', 'Approved')
                ->get();
    
        return view('peminjaman', ['list' => $list]);
    }
     
    public function detail_peminjaman($PeminjamanID)
    {
 
        $detail = DB::table('peminjaman')
         ->join('buku', 'buku.BukuID', '=', 'peminjaman.BukuID')
         ->join('user', 'user.UserID', '=', 'peminjaman.UserID')
         ->where('user.UserID', '=', Auth::user()->UserID)
         ->where('peminjaman.PeminjamanID', '=', $PeminjamanID)
         ->get();
        return view('pdf', ['detail' => $detail]);
    
    }

    public function hapus_peminjaman($id)
    {
        DB::table('peminjaman')->where('PeminjamanID', '=', $id)->delete();
        return back();
    }

    public function printpinjam()
    {
        $list = Peminjaman::with(['buku', 'user'])
                ->where('StatusPeminjaman', 'Approved')
                ->get();
    
        return view('print', ['list' => $list]);
    }
}