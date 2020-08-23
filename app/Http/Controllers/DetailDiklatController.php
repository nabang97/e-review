<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail_diklat;

class DetailDiklatController extends Controller
{
    public function index()
    {
        $detaildiklat = Detail_diklat::all();
        return view('admin.jadwal_diklat',compact('detaildiklat'));
    }

    public function store(Request $request)
    {
        $date = explode('-',$request->tanggal_diklat);
        $tahun = $date[0];
        try {
            $store = Detail_diklat::create([
                "nama_diklat_id" => $request->nama_diklat,
                "tahun"          => $tahun,
                "tanggal"        => $request->tanggal_diklat,
                "tempat_pelatihan" => $request->tempat_diklat,
            ]);
        } catch (\Exception $ex) {
            return redirect()->back()->with('error','Data gagal ditambahkan');
        }

        return redirect()->back()->with('success','Data berhasil ditambahkan');
    }

    public function update(Request $request)
    {
        $date = explode("-",$request->tanggal_diklat);
        $tahun = $date[0];

        try {
            $detail = Detail_diklat::where('nama_diklat_id',$request->nama_diklat_id)->where('tahun',$tahun);
            $detail->update([
                "tanggal"        => $request->tanggal_diklat,
                "tempat_pelatihan" => $request->tempat_diklat,
            ]);
        } catch (\Throwable $th) {
            throw $th;
            return redirect()->back()->with('error','Data gagal diupdate');
        }

        return redirect()->back()->with('success','Data berhasil diupdate');
    }

    public function delete($nama_diklat,$tahun)
    {
        try {
            $detail = Detail_diklat::where('nama_diklat_id',$nama_diklat)->where('tahun',$tahun)->delete();
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error','Data gagal dihapus');
        }

        return redirect()->back()->with('success','Data berhasil dihapus');
    }
}
