<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
    protected $fillable = ['nama_buku', 'stok','jenis_buku_id'];
    public function jenisBuku()
    {
        return $this->belongsTo(JenisBuku::class);
    }
    public function transaksi()
    {
        return $this->hasMany(TransaksiPeminjaman::class);
    }
    
}
