@extends('layouts.admin.main')

@section('title')
    Nama Diklat
@endsection

@section('sub_judul','Nama Diklat')

@section('content')
<div class="d-flex justify-content-end">
    <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddNamaDiklat">Tambah Nama Diklat</button>
</div>
<br>
<div class="table-responsive">
    <table id="tableDiklatName" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Diklat</th>
                <th>Jenis Diklat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($namadiklat as $nama_diklat)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $nama_diklat->nama_diklats }}</td>
                <td>{{ $nama_diklat->jenis_diklat->nama_jenis_diklats }}</td>
                <form action="" method="post" id="form_hapus_diklat">
                    @csrf
                    @method('DELETE')
                </form>
                <th>
                    <button type="button" id="editdiklat" data-id_diklat="{{ $nama_diklat->id }}" data-jenis_diklat="{{ $nama_diklat->jenis_diklat->nama_jenis_diklats }}" data-nama_diklat="{{ $nama_diklat->nama_diklats }}" class="btn btn-warning" data-toggle="modal" data-target="#modalEditNamaDiklat">Edit</button>
                    <button type="button" class="btn btn-danger" id="deletediklat" data-url="{{ route('nama_diklat.delete',[$nama_diklat->id]) }}" data-diklat="{{ $nama_diklat->id }}">Delete</button>
                </th>
            </tr>
            @empty
            <tr>
                <td>Data tidak ditemukan</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection


@section('modal')


<!-- Modal -->
<div class="modal fade" id="modalAddNamaDiklat" tabindex="3" role="dialog" aria-labelledby="modalAddNamaDiklatTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAddNamaDiklatTitle">Tambah Nama Diklat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('nama_diklat.store') }}" method="POST" id="form_diklat">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Diklat</label>
                <input type="text" class="form-control" name="nama_diklat">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Diklat</label>
                <select class="form-control" name="jenis_diklat">
                </select>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="simpandiklat" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalEditNamaDiklat" tabindex="3" role="dialog" aria-labelledby="modalEditNamaDiklatTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditNamaDiklatTitle">Edit Nama Diklat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('nama_diklat.update') }}" method="POST" id="form_edit_diklat">
        @csrf
        @method("PATCH")
            <input type="hidden" name="id_diklat" id="id_diklat">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Diklat</label>
                <input type="text" class="form-control" name="nama_diklat" id="edit_nama_diklat">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Diklat</label>
                <select class="form-control" name="jenis_diklat" id="edit_jenis_diklat">
                </select>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="updatediklat" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


@endsection
