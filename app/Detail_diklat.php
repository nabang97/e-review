<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_diklat extends Model
{
    protected $fillable = ['nama_diklat_id','tahun','tanggal','tempat_pelatihan'];

    public function nama_diklat()
    {
        return $this->belongsTo(Nama_diklat::class, 'nama_diklat_id');
    }
}
