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
            <tr>
                <td>1</td>
                <td>Row 1 Data 2</td>
                <td>Row 1 Data 2</td>
                <th>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#modalEditNamaDiklat">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </th>
            </tr>
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
        <form>
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
        <button type="button" class="btn btn-primary">Save changes</button>
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
      <form>
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
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection
