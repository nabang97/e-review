@extends('layouts.admin.main')

@section('title')
Responses PKA
@endsection

@section('sub_judul','Responses PKA')

@section('content')
<form action="{{ route('pka.export') }}" method="get">
<div class="d-flex justify-content-between">
    <div class="d-flex justify-content-start">
        <input type="text" class="form-control year-picker" name="tahun_diklat" value="{{date('Y')}}">
        <select class="form-control ml-2" name="nama_diklat_pka"></select>
        <button type="button" class="btn btn-primary ml-2">Show</button>
        <button type="submit" class="btn btn-primary ml-2">Export</button>
    </div>
</div>
</form>
<br>
<div class="table-responsive">
    <table id="tableJadwalDiklat" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Isi</th>

            </tr>
        </thead>
        <tbody>
            @foreach($peserta as $responden)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $responden->nip_email }}</td>
                <td>
                    @foreach($responden->detail_kuisioner as $kuisioner)
                    @foreach($kuisioner->isi as $isi)
                    <li>{{ $isi }}</li>
                    @endforeach
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection


@section('modal')


@endsection
