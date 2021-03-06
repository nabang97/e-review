<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Review | PKA</title>
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <main class="start-page d-flex justify-content-center align-items-center">
        <div class="layer-background"></div>

        <div class="card">
            <div class="card-body">
                <div class="logo-container d-flex justify-content-between">
                     <img src="{{asset('storage/img/logo-sumbar.png')}}" alt="" width="50px">
                     <div class="logo-text">
                        <h5><b>e-review Penyelenggaraan Pelatihan</b></h5>
                        <span>BPSDM PROVINSI SUMATERA BARAT</span>
                     </div>
                </div>
                <hr>
                <form action="{{ route('kuisioner_page.index') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <select class="form-control" name="status_peserta">
                            <option value="pns">PNS</option>
                            <option value="umum">Umum</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <select class="form-control" name="diklat_id">
                            @foreach($jenis_diklat as $diklat)
                            <option value="{{ $diklat->id }}">{{ $diklat->nama_jenis_diklats }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="tahun_diklat" value="{{ date('Y') }}" hidden>
                        <select class="form-control" name="nama_diklat">
                            <option value="">Pilih Nama Diklat</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="NIP" name="nip">
                        <input type="email" class="form-control" placeholder="Email" hidden>
                    </div>
                    <center><button type="submit" class="btn btn-submit">Mulai</button><center>
                </form>
            </div>
        </div>

    </main>
</body>
</html>
