<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuisioner_kategori extends Model
{
    protected $fillable = ['nama_kategori_kuisioner','jenis_diklat_id'];

    public function jenis_diklat()
    {
        return $this->belongsTo(Jenis_diklat::class, 'jenis_diklat_id');
    }

    public function kuisioner()
    {
        return $this->hasMany(Kuisioner::class);
    }
}
