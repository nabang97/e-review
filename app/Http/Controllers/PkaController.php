<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail_kuisioner;
use App\Kuisioner_kategori;
use App\Peserta;

class PkaController extends Controller
{
    public function index()
    {
        $detail_kuisioner = Detail_kuisioner::all();
        $kuisioner = Detail_kuisioner::select('detail_kuisioners.*','nama_diklats.*','jenis_diklats.*')
        ->join('nama_diklats','detail_kuisioners.diklat_id','=','nama_diklats.id')
        ->join('jenis_diklats','nama_diklats.jenis_diklat_id','=','jenis_diklats.id')
        ->where('detail_kuisioners.tahun',"2020")
        ->where('detail_kuisioners.diklat_id',"4")
        ->where('jenis_diklats.nama_jenis_diklats','Pelatihan Administrator')
        ->get();

        return view('admin.responses.pka');
    }

    public function export(Request $request)
    {
        $data1 = [];

        $kuisioner = Detail_kuisioner::select('detail_kuisioners.*','nama_diklats.*','jenis_diklats.*')
        ->join('nama_diklats','detail_kuisioners.diklat_id','=','nama_diklats.id')
        ->join('jenis_diklats','nama_diklats.jenis_diklat_id','=','jenis_diklats.id')
        ->where('detail_kuisioners.tahun',$request->tahun_diklat)
        ->where('detail_kuisioners.diklat_id',$request->nama_diklat_pka)
        ->where('jenis_diklats.nama_jenis_diklats','Pelatihan Administrator')
        ->where('detail_kuisioners.nip','1611521002')
        ->get();

        $kategori = Kuisioner_kategori::where('jenis_diklat_id','1')->get();
        $responden = Peserta::all();
        $tahun_diklat = $request->tahun_diklat;
        $diklat_id = $request->nama_diklat_pka;

        // foreach($responden as $peserta)
        // {
        //     foreach($kuisioner as $data_kuisioner)
        //     {
        //         $jawaban1 =
        //     }

        //     $data1[] = [
        //         "nip"   => $peserta->nip_email,
        //         "jawaban1" => "50",
        //         "jawaban2" => "50",
        //         "jawaban3" => "50",
        //         "jawaban4" => "50",
        //         "jawaban5" => "50",
        //         "jawaban6" => "50",
        //         "jawaban7" => "50",
        //     ];
        // }

        // dd($data1);

        return view('admin.responses.kuisioner',compact('kategori','responden','tahun_diklat','diklat_id'));
    }
}
