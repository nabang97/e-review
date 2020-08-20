<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_diklat extends Model
{
    protected $fillable = ['nama_jenis_diklats'];

    public function nama_diklat()
    {
        return $this->hasMany(Nama_diklat::class);
    }

    public function kuisioner_kategori()
    {
        return $this->hasMany(Kuisioner_kategori::class);
    }
}
