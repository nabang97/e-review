<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <img src="{{asset('storage/img/logo-sumbar.png')}}" width="50" height="50" alt="" loading="lazy" style="margin-right:10px">
                <div style="font-size:15px"> 
                    <span> <b>e-Review Penyelenggaraan Pelatihan</b></span><br>
                    <span>   BPSDM Provinsi Sumatera Barat</span>
                </div>                
            </a>            
        </nav>
    </header>
    <main class="container">
    <h4>Kuisioner Penyelenggaraan Pelatihan Kepemimpinan Administrator</h4><br>
     <div class="guide-container">
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <b>Petunjuk Pengisian</b>
                    </button>
                </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <ol type="1">
                        <li>Evaluasi ini bertujuan untuk mengetahui efektifitas pencapai program dan pelaksanaan pelatihan, yang berguna
untuk perbaikan dan penyempurnaan penyelenggaraan Pelatihan Kepemimpinan Administrator di masa yang akan datang;</li>
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
        <div class="accordion" id="accordionQuestionOne">
            <div class="card">
                <div class="card-header" id="questionHeadingOne">
                <h2 class="mb-0">
                    <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#questionCollapseOne" aria-expanded="true" aria-controls="questionCollapseOne">
                    <b>A. PENYELENGGARAAN</b>
                    </button>
                </h2>
                </div>

                <div id="questionCollapseOne" class="collapse show" aria-labelledby="questionHeadingOne" data-parent="#accordionQuestionOne">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pertanyaan</th>
                                <th>Penilaian <br> (0 - 100)</th>
                            </tr>                            
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Bagaimana tingkat penambahan pengetahuan / kemampuan setelah mengikuti Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Tingkat penyerapan materi yang dirasakan selama mengikuti program kegiatan pelatihan</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ketersediaan / waktu penyelenggaraan Diklat dengan materi yang diberikan</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Pengaturan jadwal pembelajaran, makan/ snack dan rehat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Pelayanan yang diberikan penitia selama penyelenggaraan Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Informasi dan panduan yang disampaikan/disediakan panitia dalam mendukung kelancaran pelaksanaan Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <p><b>Pendapat dan Saran berkenaan dengan program penyelenggaraan</b></p>
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                </div>
            </div>
        </div>

        <div class="accordion" id="accordionQuestionTwo">
            <div class="card">
                <div class="card-header" id="questionHeadingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#questionCollapseTwo" aria-expanded="true" aria-controls="questionCollapseTwo">
                    <b>B. MATERI DIKLAT</b>
                    </button>
                </h2>
                </div>

                <div id="questionCollapseTwo" class="collapse show" aria-labelledby="questionHeadingTwo" data-parent="#accordionQuestionTwo">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pertanyaan</th>
                                <th>Penilaian <br> (0 - 100)</th>
                            </tr>                            
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Bagaimana tingkat penambahan pengetahuan / kemampuan setelah mengikuti Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Tingkat penyerapan materi yang dirasakan selama mengikuti program kegiatan pelatihan</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ketersediaan / waktu penyelenggaraan Diklat dengan materi yang diberikan</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Pengaturan jadwal pembelajaran, makan/ snack dan rehat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Pelayanan yang diberikan penitia selama penyelenggaraan Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Informasi dan panduan yang disampaikan/disediakan panitia dalam mendukung kelancaran pelaksanaan Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>

        <div class="accordion" id="accordionQuestionThree">
            <div class="card">
                <div class="card-header" id="questionHeadingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#questionCollapseTwo" aria-expanded="true" aria-controls="questionCollapseTwo">
                    <b>C. ASRAMA / PENGINAPAN</b>
                    </button>
                </h2>
                </div>

                <div id="questionCollapseTwo" class="collapse show" aria-labelledby="questionHeadingTwo" data-parent="#accordionQuestionTwo">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pertanyaan</th>
                                <th>Penilaian <br> (0 - 100)</th>
                            </tr>                            
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Bagaimana tingkat penambahan pengetahuan / kemampuan setelah mengikuti Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Tingkat penyerapan materi yang dirasakan selama mengikuti program kegiatan pelatihan</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ketersediaan / waktu penyelenggaraan Diklat dengan materi yang diberikan</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Pengaturan jadwal pembelajaran, makan/ snack dan rehat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Pelayanan yang diberikan penitia selama penyelenggaraan Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Informasi dan panduan yang disampaikan/disediakan panitia dalam mendukung kelancaran pelaksanaan Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>

        <div class="accordion" id="accordionQuestionFour">
            <div class="card">
                <div class="card-header" id="questionHeadingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-block text-left text-uppercase" type="button" data-toggle="collapse" data-target="#questionCollapseTwo" aria-expanded="true" aria-controls="questionCollapseTwo">
                    <b>D. Konsumsi dan Ruang Makan</b>
                    </button>
                </h2>
                </div>

                <div id="questionCollapseTwo" class="collapse show" aria-labelledby="questionHeadingTwo" data-parent="#accordionQuestionTwo">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pertanyaan</th>
                                <th>Penilaian <br> (0 - 100)</th>
                            </tr>                            
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Bagaimana tingkat penambahan pengetahuan / kemampuan setelah mengikuti Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Tingkat penyerapan materi yang dirasakan selama mengikuti program kegiatan pelatihan</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ketersediaan / waktu penyelenggaraan Diklat dengan materi yang diberikan</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Pengaturan jadwal pembelajaran, makan/ snack dan rehat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Pelayanan yang diberikan penitia selama penyelenggaraan Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Informasi dan panduan yang disampaikan/disediakan panitia dalam mendukung kelancaran pelaksanaan Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>

        <div class="accordion" id="accordionQuestionFive">
            <div class="card">
                <div class="card-header" id="questionHeadingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-block text-left text-uppercase" type="button" data-toggle="collapse" data-target="#questionCollapseTwo" aria-expanded="true" aria-controls="questionCollapseTwo">
                    <b>E. Ruangan dan Sarana Belajar</b>
                    </button>
                </h2>
                </div>

                <div id="questionCollapseTwo" class="collapse show" aria-labelledby="questionHeadingTwo" data-parent="#accordionQuestionTwo">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pertanyaan</th>
                                <th>Penilaian <br> (0 - 100)</th>
                            </tr>                            
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Bagaimana tingkat penambahan pengetahuan / kemampuan setelah mengikuti Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Tingkat penyerapan materi yang dirasakan selama mengikuti program kegiatan pelatihan</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ketersediaan / waktu penyelenggaraan Diklat dengan materi yang diberikan</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Pengaturan jadwal pembelajaran, makan/ snack dan rehat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Pelayanan yang diberikan penitia selama penyelenggaraan Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Informasi dan panduan yang disampaikan/disediakan panitia dalam mendukung kelancaran pelaksanaan Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>

        <div class="accordion" id="accordionQuestionSix">
            <div class="card">
                <div class="card-header" id="questionHeadingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-block text-left text-uppercase" type="button" data-toggle="collapse" data-target="#questionCollapseTwo" aria-expanded="true" aria-controls="questionCollapseTwo">
                    <b>F. Perpustakaan dan Internet</b>
                    </button>
                </h2>
                </div>

                <div id="questionCollapseTwo" class="collapse show" aria-labelledby="questionHeadingTwo" data-parent="#accordionQuestionTwo">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pertanyaan</th>
                                <th>Penilaian <br> (0 - 100)</th>
                            </tr>                            
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Bagaimana tingkat penambahan pengetahuan / kemampuan setelah mengikuti Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Tingkat penyerapan materi yang dirasakan selama mengikuti program kegiatan pelatihan</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ketersediaan / waktu penyelenggaraan Diklat dengan materi yang diberikan</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Pengaturan jadwal pembelajaran, makan/ snack dan rehat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Pelayanan yang diberikan penitia selama penyelenggaraan Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Informasi dan panduan yang disampaikan/disediakan panitia dalam mendukung kelancaran pelaksanaan Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>

        <div class="accordion" id="accordionQuestionSeven">
            <div class="card">
                <div class="card-header" id="questionHeadingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-block text-left text-uppercase" type="button" data-toggle="collapse" data-target="#questionCollapseTwo" aria-expanded="true" aria-controls="questionCollapseTwo">
                    <b>G. Pendukung diklat lainnya</b>
                    </button>
                </h2>
                </div>

                <div id="questionCollapseTwo" class="collapse show" aria-labelledby="questionHeadingTwo" data-parent="#accordionQuestionTwo">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pertanyaan</th>
                                <th>Penilaian <br> (0 - 100)</th>
                            </tr>                            
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Bagaimana tingkat penambahan pengetahuan / kemampuan setelah mengikuti Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Tingkat penyerapan materi yang dirasakan selama mengikuti program kegiatan pelatihan</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ketersediaan / waktu penyelenggaraan Diklat dengan materi yang diberikan</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Pengaturan jadwal pembelajaran, makan/ snack dan rehat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Pelayanan yang diberikan penitia selama penyelenggaraan Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Informasi dan panduan yang disampaikan/disediakan panitia dalam mendukung kelancaran pelaksanaan Diklat</td>
                                <td>
                                    <input type="number" class="form-control" name="" id="" value="60" min="0" max="100">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>

        <div class="accordion" id="accordionQuestion8">
            <div class="card">
                <div class="card-header" id="questionHeadingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-block text-left text-uppercase" type="button" data-toggle="collapse" data-target="#questionCollapseTwo" aria-expanded="true" aria-controls="questionCollapseTwo">
                    <b>H. Saran untuk perbaikan dan peningkatan penyelenggaraan Diklat</b>
                    </button>
                </h2>
                </div>

                <div id="questionCollapseTwo" class="collapse show" aria-labelledby="questionHeadingTwo" data-parent="#accordionQuestionTwo">
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>
                                    <div class="form-group">
                                        <label>Saran atau catatan penting terhadap pelayanan panitia pelaksana / penyelenggara</label>
                                        <textarea name="" id="" cols="30" class="form-control" rows="2"></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>
                                    <div class="form-group">
                                        <label>Saran atau catatan penting terhadap pelayanan panitia pelaksana / penyelenggara</label>
                                        <textarea name="" id="" cols="30" class="form-control" rows="2"></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>
                                    <div class="form-group">
                                        <label>Saran atau catatan penting terhadap pelayanan panitia pelaksana / penyelenggara</label>
                                        <textarea name="" id="" cols="30" class="form-control" rows="2"></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>
                                    <div class="form-group">
                                        <label>Saran atau catatan penting terhadap pelayanan panitia pelaksana / penyelenggara</label>
                                        <textarea name="" id="" cols="30" class="form-control" rows="2"></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>
                                    <label>Fasilitator / narasumber yang menurut Saudara mampu menyampaikan materi pelajaran / arahan dan yang disertai dengan alasan.</label>
                                    <div class="form-group">
                                        <input type="text" name="" id="" class="form-control" placeholder="Nama Fasilitator">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="" id="" class="form-control" placeholder="Materi yang disampaikan">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Alasan/Komentar"></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>
                                    <label>Fasilitator / narasumber yang menurut Saudara tidak mampu menyampaikan materi pelajaran / arahan dan yang disertai dengan alasan.</label>
                                    <div class="form-group">
                                        <input type="text" name="" id="" class="form-control" placeholder="Nama Fasilitator">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="" id="" class="form-control" placeholder="Materi yang disampaikan">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Alasan/Komentar"></textarea>
                                    </div>
                                </td>
                            </tr>
                        </tbody>                                                
                    </table>
                </div>
                </div>
            </div>
        </div>

     </div>
        <br>
        
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary mr-2" id="prev-to">PREVIOUS</button>
            <button class="btn btn-primary" id="next-to">NEXT</button>
            <button class="btn btn-submit" id="submit-to">SUBMIT</button>
        </div>
     
        <br>
    </main>

    
</body>
</html>