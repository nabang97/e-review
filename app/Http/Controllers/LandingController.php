<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis_diklat;
use App\Peserta;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        $jenis_diklat = Jenis_diklat::all();
        return view('pka_start',compact('jenis_diklat'));
    }


}
