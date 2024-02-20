<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public function buku()
    {
        return $this->belongsToMany(Buku::class, 'kategoribuku_relasi', 'KategoriID', 'BukuID');
    }

    protected $table = 'kategoribuku';
    protected $primaryKey = 'KategoriID';
}
