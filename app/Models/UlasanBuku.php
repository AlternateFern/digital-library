<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UlasanBuku extends Model
{   
    protected $fillable = ['UserID','BukuID','Ulasan','Rating'];
    protected $table = 'ulasanbuku';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'BukuID','BukuID');
    }
}