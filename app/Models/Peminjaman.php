<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'UserID', 'BukuID', 'TanggalPeminjaman', 'TanggalPengembalian', 'StatusPeminjaman',
    ];
    protected $table = 'peminjaman'; 
    public $timestamps = false;
    protected $primaryKey = 'PeminjamanID';

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'BukuID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }
}