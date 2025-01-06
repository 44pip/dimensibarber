<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    /** @use HasFactory<\Database\Factories\LayananFactory> */
    use HasFactory;

    protected $fillable = [
        'jenis',
        'deskripsi',
        'harga',
    ];

    // Relasi: Satu Layanan memiliki banyak Pemesanan
    public function pemesanans()
    {
        return $this->hasMany(Pemesanan::class, 'layanan_id');
    }
}
