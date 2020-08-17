<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
                <center><h6><b>Pelatihan Kepemimpinan Administrator/Pengawas<b></h6></center>
                <form>
                    <div class="form-group">
                        <select class="form-control">
                            <option value="pns">PNS</option>
                            <option value="umum">Umum</option>
                        </select>
                       
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option value="administrator">Administrator</option>
                            <option value="pengawas">Pengawas</option>
                        </select>                       
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="NIP">
                        <input type="email" class="form-control" placeholder="Email" hidden>
                    </div>
                    <center><a href="/pka" class="btn btn-submit">Mulai</a><center>
                </form>
            </div>
        </div>
        
    </main>
</body>
</html>