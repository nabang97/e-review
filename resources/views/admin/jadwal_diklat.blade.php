@extends('layouts.admin.main')

@section('title')
    Nama Diklat
@endsection

@section('sub_judul','Jadwal Diklat')

@section('content')
<div class="d-flex justify-content-between">
    <div class="d-flex justify-content-start">
        <input type="text" class="form-control year-picker" name="tahun_diklat" value="{{date('Y')}}">
        <select class="form-control ml-2" name="jenis_diklat"></select>
        <button class="btn btn-primary ml-2 btn-sm">Show</button>
    </div>
    <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddJadwalDiklat">Tambah Nama Diklat</button>
</div>
<br>
<div class="table-responsive">
    <table id="tableJadwalDiklat" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Diklat</th>
                <th>Jenis Diklat</th>
                <th>Tanggal Diklat</th>
                <th>Tempat Pelaksanaan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($detaildiklat as $detail_diklat)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $detail_diklat->nama_diklat->nama_diklats }}</td>
                <td>{{ $detail_diklat->nama_diklat->jenis_diklat->nama_jenis_diklats }}</td>
                <td>{{ $detail_diklat->tanggal }}</td>
                <td>{{ $detail_diklat->tempat_pelatihan }}</td>
                <form action="" method="post" id="form_hapus_jadwal">
                    @csrf
                    @method("DELETE")
                </form>
                <th>
                    <button class="btn btn-warning" id="editjadwal" data-nama_diklat_id="{{ $detail_diklat->nama_diklat_id }}" data-tahun="{{ $detail_diklat->tahun }}" data-tempat_diklat="{{ $detail_diklat->tempat_pelatihan }}" data-tanggal="{{ $detail_diklat->tanggal }}" data-jenis_diklat="{{ $detail_diklat->nama_diklat->jenis_diklat->nama_jenis_diklats }}" data-nama_diklat="{{ $detail_diklat->nama_diklat->nama_diklats }}" data-toggle="modal" data-target="#modalEditJadwalDiklat">Edit</button>
                    <button class="btn btn-danger" type="button" id="deletejadwal" data-url="{{ route('jadwal_diklat.delete',[$detail_diklat->nama_diklat_id,$detail_diklat->tahun]) }}">Delete</button>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

@section('modal')

<!-- Modal -->
<div class="modal fade" id="modalAddJadwalDiklat" tabindex="3" role="dialog" aria-labelledby="modalAddJadwalDiklatTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAddJadwalDiklatTitle">Tambah Nama Diklat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('jadwal_diklat.store') }}" method="POST" id="form_jadwal">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Diklat</label>
                <select class="form-control" name="jenis_diklat">
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Nama Diklat</label>
                <select class="form-control" name="nama_diklat">
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Tanggal Diklat</label>
                <input type="date" class="form-control" name="tanggal_diklat">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Tempat Pelaksanaan</label>
                <input type="text" class="form-control" name="tempat_diklat">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="simpanjadwal" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalEditJadwalDiklat" tabindex="3" role="dialog" aria-labelledby="modalEditJadwalDiklatTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditJadwalDiklatTitle">Edit Jadwal Diklat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('jadwal_diklat.update') }}" method="POST" id="form_update_jadwal">
          @csrf
          @method('PATCH')
          <input type="hidden" name="nama_diklat_id" id="nama_diklat_id">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Diklat</label>
                <input type="text" class="form-control" name="jenis_diklat" id="jenis_diklat" readonly>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Nama Diklat</label>
                <input type="text" class="form-control" name="nama_diklat" id="nama_diklat" readonly>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Tanggal Diklat</label>
                <input type="date" class="form-control" name="tanggal_diklat" id="tanggal_diklat">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Tempat Pelaksanaan</label>
                <input type="text" class="form-control" name="tempat_diklat" id="tempat_diklat">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="updatejadwal" type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            @if(Session::has('success'))
            iziToast.success({
                title: 'Berhasil',
                position: 'topRight',
                message: '{{ Session::get('success') }}'
            });
            @elseif(Session::has('error'))
            iziToast.error({
                title: 'Gagal',
                position: 'topRight',
                message: '{{ Session::get('error') }}'
            });
            @endif
        });
    </script>
@endsection
