<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis_diklat;
use App\Detail_kuisioner;
use App\Detail_diklat;
use App\Nama_diklat;
use App\Peserta;

class Kuisioner_pageController extends Controller
{
    public function index(Request $request)
    {
        try {
            $detail_diklat = Detail_diklat::where('nama_diklat_id','=',$request->nama_diklat,'and')->where('tahun', '=',$request->tahun_diklat)->first();
            $nama_diklat= Nama_diklat::find($request->nama_diklat);
            $jenis_diklat = Jenis_diklat::find($request->diklat_id);
            $kuisioner = Detail_kuisioner::where('nip',$request->nip)->where('tahun',date('Y'))->where('diklat_id',$request->nama_diklat)->get();
            $nip = $request->nip;
            $status_peserta = $request->status_peserta;

            if(!$kuisioner->isEmpty())
            {
                return redirect()->route('landing.index')->with('error','NIP / Email sudah mengisi kuisioner');
            }
            // return $nama_diklat;
            $request->session()->put('nip_email', $request->nip);
            $request->session()->put('jenis_kelamin', '1');
        } catch (\Exception $th) {
            return redirect()->route('landing.index');
        }

        return view('index',compact(['jenis_diklat','nama_diklat','detail_diklat', 'nip','status_peserta' ]));
    }

    public function store(Request $request)
    {
        $kuisionerArr = [];
        $peserta = Peserta::where('nip_email',$request->session()->get('nip_email'))->get();

        if(!$peserta)
        {
            Peserta::create([
                'nip_email'   => $request->session()->get('nip_email'),
                'jenis_kelamin' => $request->session()->get('jenis_kelamin'),
            ]);
        }


        foreach($request->kuisioner as $respon){

            $kuisionerArr[] = [
                "nip" => $respon["nip"],
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
            return $request->session()->flash('error', 'Gagal mengisi data, silahkan ulangi lagi');
        }
    }
}
