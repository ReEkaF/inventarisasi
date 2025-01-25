<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'KTP',
        'alamat',
        'umur',
        'WA',
    ];
    public function transaksi()
    {
        return $this->hasMany(TransaksiPeminjaman::class);
    }

}
