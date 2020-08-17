<?php

use Illuminate\Database\Seeder;

class KuisionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kuisioners = [
            ['id' => 1, 'kuisioner_kategori_id' => 1 , 'pertanyaan' => 'Pemberian kelengkapan informasi / jadwal pelaksanaan Pelatihan oleh Panitia Penyelenggara.'],
            ['id' => 2, 'kuisioner_kategori_id' => 1 , 'pertanyaan' => 'Tingkat penambahan pengetahuan, wawasan dan keterampilan yang Saudara rasakan setelah mengikuti pelatihan.'],
            ['id' => 3, 'kuisioner_kategori_id' => 1 , 'pertanyaan' => 'Tingkat penyerapan materi yang dirasakan selama mengikuti program kegiatan pelatihan.'],
            ['id' => 4, 'kuisioner_kategori_id' => 1 , 'pertanyaan' => 'Materi pelatihan yang diberikan telah sesuai dengan waktu penyelenggaraan.'],
            ['id' => 5, 'kuisioner_kategori_id' => 1 , 'pertanyaan' => 'Pengaturan  jadwal pembelajaran, makan/ snack dan rehat yang diberlakukan.'],
            ['id' => 6, 'kuisioner_kategori_id' => 1 , 'pertanyaan' => 'Tingkat pelayanan yang diberikan selama penyelenggaraan.'],
            ['id' => 7, 'kuisioner_kategori_id' => 1 , 'pertanyaan' => 'Informasi dan panduan yang disampaikan/disediakan panitia dalam mendukung kelancaran pelaksanaan pelatihan.'],

            // ['id' => 8, 'kuisioner_kategori_id' => 2 , 'pertanyaan' => 'Kesesuaian materi yang diberikan dengan bidang tugas atau jabatan.'],
            // ['id' => 9, 'kuisioner_kategori_id' => 2 , 'pertanyaan' => 'Tingkat pemahaman / penguasaan materi setelah mengikuti pelatihan ini.'],
            // ['id' => 10, 'kuisioner_kategori_id' => 2 , 'pertanyaan' => 'Sequence pemberian materi pelatihan selama pelaksanaan Diklat .'],
            // ['id' =>11, 'kuisioner_kategori_id' => 2 , 'pertanyaan' => 'Ketersediaan bahan / materi (buku/panduan/modul) yang disediakan panitia.'],
            // ['id' => 12, 'kuisioner_kategori_id' => 2 , 'pertanyaan' => 'Materi pelatihan yang diberikan cukup mendukung pelaksanaan tugas / jabatan.'],
           
            // ['id' => 13, 'kuisioner_kategori_id' => 3 , 'pertanyaan' => 'Kesesuaian pola pelatihan penyusunan laporan aktualisasi dengan penyelenggaraan pelatihan yang Saudara ikuti.'],
            // ['id' => 14, 'kuisioner_kategori_id' => 3 , 'pertanyaan' => 'Tingkat urgensi pelaksanaan pelatihan yang Saudara rasakan.'],
            // ['id' => 15, 'kuisioner_kategori_id' => 3 , 'pertanyaan' => 'Peranan Mentor dalam penyusunan laporan aktualisasi.'],
            // ['id' => 16, 'kuisioner_kategori_id' => 3 , 'pertanyaan' => 'Tingkat pemberian arahan/ bimbingan Coach terhadap penyusunan laporan aktualisasi yang dilakukan.'],

            // ['id' => 17, 'kuisioner_kategori_id' => 4 , 'pertanyaan' => 'Kebersihan dan kenyamanan kamar tidur yang disediakan.'],
            // ['id' => 18, 'kuisioner_kategori_id' => 4 , 'pertanyaan' => 'Keadaan kebersihan air, kamar mandi / toilet yang disediakan.'],
            // ['id' => 19, 'kuisioner_kategori_id' => 4 , 'pertanyaan' => 'Kelengkapan kamar yang disediakan seperti penerangan, pendingin ruangan/ kamar.'],
            // ['id' => 20, 'kuisioner_kategori_id' => 4 , 'pertanyaan' => 'Pelayanan petugas asrama / penginapan selama pelatihan.'],
            // ['id' => 21, 'kuisioner_kategori_id' => 4 , 'pertanyaan' => 'Tingkat kebersihan dan keasrian lingkungan asrama / penginapan yang Saudara rasakan.'],

            // ['id' => 22, 'kuisioner_kategori_id' => 5 , 'pertanyaan' => 'Pengaturan jadwal menu dan snack.'],
            // ['id' => 23, 'kuisioner_kategori_id' => 5 , 'pertanyaan' => 'Tingkat kecukupan gizi dari menu yang disediakan.'],
            // ['id' => 24, 'kuisioner_kategori_id' => 5 , 'pertanyaan' => 'Kebersihan dalam penyajian makanan.'],
            // ['id' => 25, 'kuisioner_kategori_id' => 5 , 'pertanyaan' => 'Tingkat variasi menu makanan dan menu rehat  (coffe break).'],
            // ['id' => 26, 'kuisioner_kategori_id' => 5 , 'pertanyaan' => 'Tingkat higienis makanan, peralatan dan kebersihan ruangan makan.'],
            // ['id' => 27, 'kuisioner_kategori_id' => 5 , 'pertanyaan' => 'Sopan santun dan keramahan petugas ruang makan.'],
            // ['id' => 28, 'kuisioner_kategori_id' => 5 , 'pertanyaan' => 'Respon terhadap kebutuhan dan keluhan peserta.'],

            // ['id' => 29, 'kuisioner_kategori_id' => 6 , 'pertanyaan' => 'Kebersihan ruangan kelas, dan perlengkapan kursi, meja dll.'],
            // ['id' => 30, 'kuisioner_kategori_id' => 6 , 'pertanyaan' => 'Ketersediaan alat bantu belajar (infocus, laptop dan sound system) yang digunakan.'],
            // ['id' => 31, 'kuisioner_kategori_id' => 6 , 'pertanyaan' => 'Sistim penerangan serta kebersihan kamar mandi / toilet ruang belajar.'],

            // ['id' => 32, 'kuisioner_kategori_id' => 7 , 'pertanyaan' => 'Ketersediaan / kelengkapan buku dan literature sebagai media informasi dan referensi pembelajaran.'],
            // ['id' => 33, 'kuisioner_kategori_id' => 7 , 'pertanyaan' => 'Ketersediaan dan kemudahan akses internet yang disediakan.'],
            // ['id' => 34, 'kuisioner_kategori_id' => 7 , 'pertanyaan' => 'Kebersihan, penerangan dan pendingin ruangan perpustakaan.'],
            // ['id' => 35, 'kuisioner_kategori_id' => 7 , 'pertanyaan' => 'Pelayanan perpustakaan yang diberikan.'],

            // ['id' => 36, 'kuisioner_kategori_id' => 8 , 'pertanyaan' => 'Pelayanan dan bimbingan yang diberikan Direktur Latihan.'],
            // ['id' => 37, 'kuisioner_kategori_id' => 8 , 'pertanyaan' => 'Tingkat pelayanan yang diberikan oleh pengamat kelas yang mendampingi fasilitator/ tenaga pengajar selama proses pembelajaran.'],
            // ['id' => 38, 'kuisioner_kategori_id' => 8 , 'pertanyaan' => 'Tingkat pelayanan petugas piket kelas selama pembelajaran.'],
            // ['id' => 39, 'kuisioner_kategori_id' => 8 , 'pertanyaan' => 'Tingkat pelayanan sekretariat panitia/ administrasi pelatihan.'],
            // ['id' => 40, 'kuisioner_kategori_id' => 8 , 'pertanyaan' => 'Tingkat penyediaan fasilitas / sarana olah raga dan sarana ibadah yang disediakan.'],
            // ['id' => 41, 'kuisioner_kategori_id' => 8 , 'pertanyaan' => 'Tingkat penyediaan fasilitas / pelayanan kesehatan yang diberikan.'],

            // ['id' => 42, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Saran  atau catatan penting terhadap pelayanan panitia pelaksana / penyelenggara.'],
            // ['id' => 43, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => '2.	Saran atau catatan penting tentang materi pelatihan.'],
            // ['id' => 44, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Saran atau catatan penting terhadap pelayanan asrama / penginapan.'],
            // ['id' => 45, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Saran atau catatan penting terkait penyediaan konsumsi.'],
            // ['id' => 46, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Catatan penting terhadap urgensi atau pentingnya penyusunan laporan studi lapangan.'],
            // ['id' => 47, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Saran untuk perbaikan kwalitas pelaksanaan pelatihan.'],
            // ['id' => 48, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Saran atau catatan penting terkait penyediaan konsumsi.'],
            // ['id' => 49, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Saran dan / atau saran tentang masalah pengembangan SDM aparatur.'],
            // ['id' => 50, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Pelatihan teknis lainnya yang relevan dengan pelaksanaan tugas / jabatan Saudara.'],
            // ['id' => 51, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Berikan penilaian tentang Coach (nama coach) Saudara dalam memberikan bimbingan / arahan.'],
            // ['id' => 47, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Fasilitator / Narasumber  yang mampu menurut Saudara menyampaikan materi pelajaran yang disertai dengan alasan.'],
            // ['id' => 48, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Fasilitator / Narasumber  yang tidak mampu menurut Saudara menyampaikan materi pelajaran yang disertai dengan alasan.'],
            
        ];
 
        DB::table('kuisioners')->insert($kuisioners);
    }
}
