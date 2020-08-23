<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nama_diklat;

class NamaDiklatController extends Controller
{
    public function optionByIndex(Request $request){
        $namadiklat = Nama_diklat::where('jenis_diklat_id','=',$request->jenisDiklat)->get();
        return $namadiklat;
    }

    public function index()
    {
        $namadiklat = Nama_diklat::all();
        return view('admin.diklat_name',compact('namadiklat'));
    }

    public function store(Request $request)
    {
        try {
            $store = Nama_diklat::create([
                "nama_diklats"  => $request->nama_diklat,
                "jenis_diklat_id" => $request->jenis_diklat
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }

        return redirect()->back()->with('success','Data berhasil ditambahkan');
    }

    public function update(Request $request)
    {
        try {
            $namadiklat = Nama_diklat::where('id',$request->id_diklat);
            $namadiklat->update([
                "nama_diklats"  => $request->nama_diklat,
                "jenis_diklat_id" => $request->jenis_diklat,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }

        return redirect()->back();
    }

    public function delete($id)
    {
        try {
            $namadiklat = Nama_diklat::where('id',$id)->delete();
        } catch (\Throwable $th) {
            throw $th;
        }

        return redirect()->back();
    }
}
