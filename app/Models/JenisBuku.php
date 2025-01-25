<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisBuku extends Model
{
    //
    protected $fillable = ['nama_jenis_buku'];
    public function buku()
    {
        return $this->hasMany('App\Models\Buku');
    }
}
