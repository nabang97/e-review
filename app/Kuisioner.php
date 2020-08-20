<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuisioner extends Model
{
    protected $fillable = ['kuisioner_kategori_id','pertanyaan','tipe'];

    public function kuisioner_kategori()
    {
        return $this->belongsTo(Kuisioner_kategori::class, 'kuisioner_kategori_id');
    }
}
