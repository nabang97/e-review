<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis_diklat;

class JenisDiklatController extends Controller
{
    //
    public function all(){
        $jenisdiklat =Jenis_diklat::get();
        return $jenisdiklat;
    }
}
