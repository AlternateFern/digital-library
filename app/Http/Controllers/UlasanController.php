<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UlasanBuku;

class UlasanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'Ulasan' => 'required|string',
            'Rating' => 'required|integer|min:1|max:5',
        ]);

        $ulasan = new UlasanBuku();
        $ulasan->UserID = auth()->id();
        $ulasan->BukuID = $request->BukuID;
        $ulasan->Ulasan = $request->Ulasan;
        $ulasan->Rating = $request->Rating;

        $ulasan->save();

        return back()->with('Ulasan');
    }
}