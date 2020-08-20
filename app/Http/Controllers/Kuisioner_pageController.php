<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis_diklat;
use App\Detail_kuisioner;

class Kuisioner_pageController extends Controller
{
    public function index(Request $request)
    {
        try {
            $jenis_diklat = Jenis_diklat::find($request->diklat_id);
            return view('index',compact('jenis_diklat'));
        } catch (\Exception $th) {
            return redirect()->route('landing.index');
        }
    }

    public function store(Request $request)
    {
        $kuisioner = [];

        foreach($request->kuisioner_id as $respon)
        {
            $kuisioner[] = [
                "nip"   => "199704121201102201",
                "kuisioner_id"  => $respon,
                "diklat_id" => "1",
                "tahun" => date("Y"),
                "isi"   => $request->respon,
            ];
        }

        dd($kuisioner);

        $store = Detail_kuisioner::insert($kuisioner);

        // dd(json_encode($kuisioner));
        return response()->json($kuisioner);
    }
}
