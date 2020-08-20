<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $fillable = ['nip_email','jenis_kelamin'];
    protected $primaryKey = 'nip_email';
}
