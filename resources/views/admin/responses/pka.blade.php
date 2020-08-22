@extends('layouts.admin.main')

@section('title')
Responses PKA
@endsection

@section('sub_judul','Responses PKA')

@section('content')
<div class="d-flex justify-content-between">
    <div class="d-flex justify-content-start">
        <input type="text" class="form-control year-picker" name="tahun_diklat" value="{{date('Y')}}">
        <select class="form-control" name="nama_diklat_pka"></select>
        <button class="btn btn-primary">Show</button>
    </div>
    
</div>
<br>
<div class="table-responsive">
    <table id="tableJadwalDiklat" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>12345678</td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>

@endsection


@section('modal')


@endsection
