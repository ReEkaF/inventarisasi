<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaksiPeminjaman extends Model
{
    protected $table = 'transaksi_peminjaman';

    // Define the fillable properties
    protected $fillable = [
        'peminjam_id',
        'buku_id',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status',
    ];

    public function peminjam()
    {
        return $this->belongsTo(Peminjam::class, 'peminjam_id');
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id');
    }

}
