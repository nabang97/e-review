@extends('layouts.admin.main')

@section('title')
    Nama Diklat
@endsection

@section('sub_judul','Jadwal Diklat')

@section('content')
<div class="d-flex justify-content-between">
    <div class="d-flex justify-content-start">
        <input type="text" class="form-control year-picker" name="tahun_diklat" value="{{date('Y')}}">
        <select class="form-control" name="jenis_diklat"></select>
        <button class="btn btn-primary">Show</button>
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
            <tr>
                <td>1</td>
                <td>Row 1 Data 2</td>
                <td>Row 1 Data 2</td>
                <td>Row 1 Data 2</td>
                <td>Row 1 Data 2</td>
                <th>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#modalEditJadwalDiklat">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </th>
            </tr>
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
        <form>            
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
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalEditJadwalDiklat" tabindex="3" role="dialog" aria-labelledby="modalEditJadwalDiklatTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditJadwalDiklatTitle">Edit Nama Diklat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
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
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection
