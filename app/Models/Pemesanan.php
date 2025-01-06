<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    /** @use HasFactory<\Database\Factories\PemesananFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'layanan_id',
        'nama',
        'no_hp',
        'tanggal',
        'waktu',
        'catatan',
        'status',
    ];

    // Relasi: Pemesanan terkait ke satu User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi: Pemesanan terkait ke satu Layanan
    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'layanan_id');
    }
}
