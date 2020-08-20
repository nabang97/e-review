<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>e-Review | BPSDM SUMBAR</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <!-- Image and text -->
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand d-flex justify-content-center" href="#">
                <img src="{{asset('storage/img/logo-sumbar.png')}}" width="50" height="50" alt="" loading="lazy"
                    style="margin-right:10px">
                <div style="font-size:15px">
                    <span> <b>e-Review Penyelenggaraan Pelatihan</b></span><br>
                    <span> BPSDM Provinsi Sumatera Barat</span>
                </div>
            </a>
        </nav>
    </header>
    <main class="container">
    <h4>Kuisioner {{ $nama_diklat->nama_diklats }} {{ $detail_diklat->tahun }}</h4><br>
        <input type="text" name="nip" value="{{ $nip }}" hidden>
        <input type="text" name="status_peserta" value="{{ $status_peserta }}" hidden>
        <div class="guide-container">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <b>Petunjuk Pengisian</b>
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <ol type="1">
                                <li>Evaluasi ini bertujuan untuk mengetahui efektifitas pencapai program dan pelaksanaan
                                    pelatihan, yang berguna
                                    untuk perbaikan dan penyempurnaan penyelenggaraan Pelatihan Kepemimpinan
                                    Administrator/Pengawas di masa yang akan datang;</li>
                                <li>Evaluasi ini menggunakan kuestioner yang bersifat tertutup dan terbuka;</li>
                                <li>Berikan tanda penilaian Saudara pada kolom yang tersedia;</li>
                                <li>Berikan saran / tanggapan Saudara terhadap pernyataan yang diberikan.</li>
                            </ol>
                            <ol type="a">Tingkat penilaian :
                                <li>91 s.d. 100 sangat memuaskan </li>
                                <li>81 s.d. 90 memuaskan </li>
                                <li>71 s.d. 80 cukup memuaskan</li>
                                <li>61 s.d. 70 kurang memuaskan</li>
                            </ol>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

            <div id="question-container">
                @foreach($jenis_diklat->kuisioner_kategori as $kuisioner_kategori)
                <div class="accordion" id="accordionQuestionOne">
                    <div class="card">
                        <div class="card-header" id="questionHeadingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#questionCollapseOne" aria-expanded="true"
                                    aria-controls="questionCollapseOne">
                                    <b>{{ $loop->iteration }}. {{ $kuisioner_kategori->nama_kategori_kuisioner }}</b>
                                </button>
                            </h2>
                        </div>

                        <div id="questionCollapseOne" class="collapse show" aria-labelledby="questionHeadingOne"
                            data-parent="#accordionQuestionOne">
                            <div class="card-body">
                            <form method="post" id="form_kuisioner">
                                <table class="table">
                                    @if($kuisioner_kategori->id != 9)
                                    <thead id="head_table">
                                        <tr>
                                            <th>No</th>
                                            <th>Pertanyaan</th>
                                            <th>Penilaian <br> (0 - 100)</th>
                                        </tr>
                                    </thead>
                                    @endif
                                    @foreach($kuisioner_kategori->kuisioner as $kuisioner)
                                        @if($kuisioner->tipe == 'angka')
                                        <tbody>
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $kuisioner->pertanyaan }}</td>
                                                <td>
                                                    <!-- <input type="text" class="form-control" name="kuisioner_id[]" value="{{ $kuisioner->id }}" hidden>
                                                    <input type="text" class="form-control" name="diklat_id" value="{{ $kuisioner->id }}" hidden> -->
                                                    <input type="number" class="form-control respon-angka" name="respon[]" value="60" min="0" nama-diklat="{{ $detail_diklat->nama_diklat_id }}" tahun-diklat="{{ $detail_diklat->tahun}}" kategori-kuisioner="{{ $kuisioner_kategori->id }}" kuisioner-id="{{ $kuisioner->id }}"
                                                        max="100" required>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endif
                                    @endforeach
                                </table>

                                @foreach($kuisioner_kategori->kuisioner as $kuisioner)
                                    @if($kuisioner->tipe == 'text')
                                    <p>{{ $loop->iteration }}. {{ $kuisioner->pertanyaan }}</p>
                                    <!-- <input type="text" class="form-control" name="kuisioner_id[]" id="kuisioner_id" value="{{ $kuisioner->id }}" hidden> -->
                                    <!-- <input type="text" class="form-control" name="diklat_id"value="{{ $kuisioner->id }}" hidden> -->
                                    <textarea name="respon[]" id="" cols="30" rows="3" value="saran" class="form-control respon-text" nama-diklat="{{ $detail_diklat->nama_diklat_id }}" tahun-diklat="{{ $detail_diklat->tahun}}" kategori-kuisioner="{{ $kuisioner_kategori->id }}" kuisioner-id="{{ $kuisioner->id }}" required></textarea>
                                    <br>
                                    @elseif($kuisioner->tipe == 'multi_text1')
                                    <td>
                                        <label>{{ $loop->iteration }} {{ $kuisioner->pertanyaan }}</label>
                                        <div class="form-group">
                                            <input type="text" name="" id="nama_fasilitator1" class="form-control respon-multi1" nama-diklat="{{ $detail_diklat->nama_diklat_id }}" tahun-diklat="{{ $detail_diklat->tahun}}" kategori-kuisioner="{{ $kuisioner_kategori->id }}" kuisioner-id="{{ $kuisioner->id }}" placeholder="Nama Fasilitator">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="" id="materi1" class="form-control" placeholder="Materi yang disampaikan">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="" id="alasan1" cols="30" rows="2" class="form-control" placeholder="Alasan/Komentar"></textarea>
                                        </div>
                                    </td>
                                    @elseif($kuisioner->tipe == 'multi_text2')
                                    <td>
                                        <label>{{ $loop->iteration }} {{ $kuisioner->pertanyaan }}</label>
                                        <div class="form-group">
                                            <input type="text" name="" id="nama_fasilitator2" class="form-control respon-multi2" nama-diklat="{{ $detail_diklat->nama_diklat_id }}" tahun-diklat="{{ $detail_diklat->tahun}}" kategori-kuisioner="{{ $kuisioner_kategori->id }}" kuisioner-id="{{ $kuisioner->id }}" placeholder="Nama Fasilitator">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="" id="materi2" class="form-control" placeholder="Materi yang disampaikan">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="" id="alasan2" cols="30" rows="2" class="form-control" placeholder="Alasan/Komentar"></textarea>
                                        </div>
                                    </td>
                                    @endif
                                @endforeach
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <br>

            <div class="d-flex justify-content-end">
                <button class="btn btn-primary mr-2" id="prev-to" type="button">PREVIOUS</button>
                <button class="btn btn-primary" id="next-to" type="button">NEXT</button>
                <button class="btn btn-submit" id="submit-to" type="button">SUBMIT</button>
            </div>

        <br>
    </main>

    <script>
    </script>


</body>

</html>
