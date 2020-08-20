<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis_diklat;
use App\Detail_kuisioner;
use App\Detail_diklat;
use App\Nama_diklat;

class Kuisioner_pageController extends Controller
{
    public function index(Request $request)
    {
        try {
            $detail_diklat = Detail_diklat::where('nama_diklat_id','=',$request->nama_diklat,'and')->where('tahun', '=',$request->tahun_diklat)->first();
            $nama_diklat= Nama_diklat::find($request->nama_diklat);
            $jenis_diklat = Jenis_diklat::find($request->diklat_id);
            $nip = $request->nip;
            $status_peserta = $request->status_peserta;
            // return $nama_diklat;
             return view('index',compact(['jenis_diklat','nama_diklat','detail_diklat', 'nip','status_peserta' ]));
        } catch (\Exception $th) {
            return redirect()->route('landing.index');
        }
    }

    public function store(Request $request)
    {
        $kuisionerArr = [];

        foreach($request->kuisioner as $respon){
            
            $kuisionerArr[] = [
                "nip" =>"199704121201102201", 
                "kuisioner_id"  => $respon["kuisioner_id"],
                "diklat_id" => $respon["diklat_id"],
                "tahun" => $respon["tahun"],
                "isi"=>$respon["isi"]
            ];
                
        }

        try {
            $store = Detail_kuisioner::insert($kuisionerArr);
            // dd($kuisionerArr);
            return $kuisionerArr;
        } catch (\Exception $th) {
            dd($th);
        }   
    }
}
