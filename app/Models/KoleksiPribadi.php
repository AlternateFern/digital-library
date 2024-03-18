<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoleksiPribadi extends Model
{
    use HasFactory;

    protected $table = 'koleksipribadi';
    protected $primaryKey = 'KoleksiID';
    public $timestamps = false;

    protected $fillable = [
        'UserID',
        'BukuID',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }

    // Define the relationship with the Buku model
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'BukuID');
    }
}