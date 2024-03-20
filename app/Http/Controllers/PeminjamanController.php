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
                ->whereIn('StatusPeminjaman', ['Pending', 'Diterima', 'Dipinjam','Selesai'])
                ->get();
    
        return view('admin/list_peminjaman', ['list' => $list]);
    }

    public function listPinjamUser($id)
    {
        $list = Peminjaman::with(['buku', 'user'])
                ->where('UserID', $id)
                ->whereIn('StatusPeminjaman', ['Pending', 'Diterima', 'Dipinjam', 'Selesai'])
                ->get();

        return view('peminjaman', ['list' => $list]);
    }

    public function updateStatus(Request $request)
    {
        foreach ($request->peminjaman as $peminjamanID => $status) {
            $peminjaman = Peminjaman::findOrFail($peminjamanID);
            $peminjaman->StatusPeminjaman = $status;
            $peminjaman->save();
        }

    return redirect()->back()->with('success', 'Status updated successfully.');
}
    
    public function detail_peminjaman($PeminjamanID)
    {
 
        $detail = DB::table('peminjaman')
         ->join('buku', 'buku.BukuID', '=', 'peminjaman.BukuID')
         ->join('user', 'user.UserID', '=', 'peminjaman.UserID')
         ->where('user.UserID', '=', Auth::user()->UserID)
         ->where('peminjaman.PeminjamanID', '=', $PeminjamanID)
         ->get();
        return view('print', ['detail' => $detail]);
    
    }

    public function hapus_peminjaman($id)
    {
        DB::table('peminjaman')->where('PeminjamanID', '=', $id)->delete();
        return view('profil');
    }

    public function printpinjam()
    {
        $list = Peminjaman::with(['buku', 'user'])
                ->whereIn('StatusPeminjaman', ['Diterima', 'Dipinjam','Selesai'])
                ->get();
    
        return view('print', ['list' => $list]);
    }
}