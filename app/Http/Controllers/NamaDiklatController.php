<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nama_diklat;

class NamaDiklatController extends Controller
{
    public function optionByIndex(Request $request){
        $namadiklat = Nama_diklat::where('id','=',$request->jenisDiklat)->get();
        return $namadiklat;
    }
}
