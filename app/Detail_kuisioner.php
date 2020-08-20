<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_kuisioner extends Model
{
    protected $fillable = ['nip','kuisioner_id','tahun','isi'];
    protected $casts = [
        'isi' => 'array'
    ];
}
