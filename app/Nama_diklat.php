<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nama_diklat extends Model
{
    protected $fillable = ['nama_diklats','jenis_diklat_id'];

    public function jenis_diklat()
    {
        return $this->belongsTo(Jenis_diklat::class,'jenis_diklat_id');
    }

    public function detail_diklat()
    {
        return $this->hasMany(Detail_diklat::class);
    }
}
