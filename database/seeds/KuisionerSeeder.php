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
            ['id' => 1, 'kuisioner_kategori_id' => 1 , 'pertanyaan' => 'Pemberian kelengkapan informasi / jadwal pelaksanaan Pelatihan oleh Panitia Penyelenggara.', 'tipe' => 'angka'],
            ['id' => 2, 'kuisioner_kategori_id' => 1 , 'pertanyaan' => 'Tingkat penambahan pengetahuan, wawasan dan keterampilan yang Saudara rasakan setelah mengikuti pelatihan.', 'tipe' => 'angka'],
            ['id' => 3, 'kuisioner_kategori_id' => 1 , 'pertanyaan' => 'Tingkat penyerapan materi yang dirasakan selama mengikuti program kegiatan pelatihan.', 'tipe' => 'angka'],
            ['id' => 4, 'kuisioner_kategori_id' => 1 , 'pertanyaan' => 'Materi pelatihan yang diberikan telah sesuai dengan waktu penyelenggaraan.', 'tipe' => 'angka'],
            ['id' => 5, 'kuisioner_kategori_id' => 1 , 'pertanyaan' => 'Pengaturan  jadwal pembelajaran, makan/ snack dan rehat yang diberlakukan.', 'tipe' => 'angka'],
            ['id' => 6, 'kuisioner_kategori_id' => 1 , 'pertanyaan' => 'Tingkat pelayanan yang diberikan selama penyelenggaraan.', 'tipe' => 'angka'],
            ['id' => 7, 'kuisioner_kategori_id' => 1 , 'pertanyaan' => 'Informasi dan panduan yang disampaikan/disediakan panitia dalam mendukung kelancaran pelaksanaan pelatihan.', 'tipe' => 'angka'],

            ['id' => 8, 'kuisioner_kategori_id' => 2 , 'pertanyaan' => 'Kesesuaian materi yang diberikan dengan bidang tugas atau jabatan.', 'tipe' => 'angka'],
            ['id' => 9, 'kuisioner_kategori_id' => 2 , 'pertanyaan' => 'Tingkat pemahaman / penguasaan materi setelah mengikuti pelatihan ini.', 'tipe' => 'angka'],
            ['id' => 10, 'kuisioner_kategori_id' => 2 , 'pertanyaan' => 'Sequence pemberian materi pelatihan selama pelaksanaan Diklat .', 'tipe' => 'angka'],
            ['id' =>11, 'kuisioner_kategori_id' => 2 , 'pertanyaan' => 'Ketersediaan bahan / materi (buku/panduan/modul) yang disediakan panitia.', 'tipe' => 'angka'],
            ['id' => 12, 'kuisioner_kategori_id' => 2 , 'pertanyaan' => 'Materi pelatihan yang diberikan cukup mendukung pelaksanaan tugas / jabatan.', 'tipe' => 'angka'],

            ['id' => 13, 'kuisioner_kategori_id' => 3 , 'pertanyaan' => 'Kesesuaian pola pelatihan penyusunan laporan aktualisasi dengan penyelenggaraan pelatihan yang Saudara ikuti.', 'tipe' => 'angka'],
            ['id' => 14, 'kuisioner_kategori_id' => 3 , 'pertanyaan' => 'Tingkat urgensi pelaksanaan pelatihan yang Saudara rasakan.', 'tipe' => 'angka'],
            ['id' => 15, 'kuisioner_kategori_id' => 3 , 'pertanyaan' => 'Peranan Mentor dalam penyusunan laporan aktualisasi.', 'tipe' => 'angka'],
            ['id' => 16, 'kuisioner_kategori_id' => 3 , 'pertanyaan' => 'Tingkat pemberian arahan/ bimbingan Coach terhadap penyusunan laporan aktualisasi yang dilakukan.', 'tipe' => 'angka'],

            ['id' => 17, 'kuisioner_kategori_id' => 4 , 'pertanyaan' => 'Kebersihan dan kenyamanan kamar tidur yang disediakan.', 'tipe' => 'angka'],
            ['id' => 18, 'kuisioner_kategori_id' => 4 , 'pertanyaan' => 'Keadaan kebersihan air, kamar mandi / toilet yang disediakan.', 'tipe' => 'angka'],
            ['id' => 19, 'kuisioner_kategori_id' => 4 , 'pertanyaan' => 'Kelengkapan kamar yang disediakan seperti penerangan, pendingin ruangan/ kamar.', 'tipe' => 'angka'],
            ['id' => 20, 'kuisioner_kategori_id' => 4 , 'pertanyaan' => 'Pelayanan petugas asrama / penginapan selama pelatihan.', 'tipe' => 'angka'],
            ['id' => 21, 'kuisioner_kategori_id' => 4 , 'pertanyaan' => 'Tingkat kebersihan dan keasrian lingkungan asrama / penginapan yang Saudara rasakan.', 'tipe' => 'angka'],

            ['id' => 22, 'kuisioner_kategori_id' => 5 , 'pertanyaan' => 'Pengaturan jadwal menu dan snack.', 'tipe' => 'angka'],
            ['id' => 23, 'kuisioner_kategori_id' => 5 , 'pertanyaan' => 'Tingkat kecukupan gizi dari menu yang disediakan.', 'tipe' => 'angka'],
            ['id' => 24, 'kuisioner_kategori_id' => 5 , 'pertanyaan' => 'Kebersihan dalam penyajian makanan.', 'tipe' => 'angka'],
            ['id' => 25, 'kuisioner_kategori_id' => 5 , 'pertanyaan' => 'Tingkat variasi menu makanan dan menu rehat  (coffe break).', 'tipe' => 'angka'],
            ['id' => 26, 'kuisioner_kategori_id' => 5 , 'pertanyaan' => 'Tingkat higienis makanan, peralatan dan kebersihan ruangan makan.', 'tipe' => 'angka'],
            ['id' => 27, 'kuisioner_kategori_id' => 5 , 'pertanyaan' => 'Sopan santun dan keramahan petugas ruang makan.', 'tipe' => 'angka'],
            ['id' => 28, 'kuisioner_kategori_id' => 5 , 'pertanyaan' => 'Respon terhadap kebutuhan dan keluhan peserta.', 'tipe' => 'angka'],

            ['id' => 29, 'kuisioner_kategori_id' => 6 , 'pertanyaan' => 'Kebersihan ruangan kelas, dan perlengkapan kursi, meja dll.', 'tipe' => 'angka'],
            ['id' => 30, 'kuisioner_kategori_id' => 6 , 'pertanyaan' => 'Ketersediaan alat bantu belajar (infocus, laptop dan sound system) yang digunakan.', 'tipe' => 'angka'],
            ['id' => 31, 'kuisioner_kategori_id' => 6 , 'pertanyaan' => 'Sistim penerangan serta kebersihan kamar mandi / toilet ruang belajar.', 'tipe' => 'angka'],

            ['id' => 32, 'kuisioner_kategori_id' => 7 , 'pertanyaan' => 'Ketersediaan / kelengkapan buku dan literature sebagai media informasi dan referensi pembelajaran.', 'tipe' => 'angka'],
            ['id' => 33, 'kuisioner_kategori_id' => 7 , 'pertanyaan' => 'Ketersediaan dan kemudahan akses internet yang disediakan.', 'tipe' => 'angka'],
            ['id' => 34, 'kuisioner_kategori_id' => 7 , 'pertanyaan' => 'Kebersihan, penerangan dan pendingin ruangan perpustakaan.', 'tipe' => 'angka'],
            ['id' => 35, 'kuisioner_kategori_id' => 7 , 'pertanyaan' => 'Pelayanan perpustakaan yang diberikan.', 'tipe' => 'angka'],

            ['id' => 36, 'kuisioner_kategori_id' => 8 , 'pertanyaan' => 'Pelayanan dan bimbingan yang diberikan Direktur Latihan.', 'tipe' => 'angka'],
            ['id' => 37, 'kuisioner_kategori_id' => 8 , 'pertanyaan' => 'Tingkat pelayanan yang diberikan oleh pengamat kelas yang mendampingi fasilitator/ tenaga pengajar selama proses pembelajaran.', 'tipe' => 'angka'],
            ['id' => 38, 'kuisioner_kategori_id' => 8 , 'pertanyaan' => 'Tingkat pelayanan petugas piket kelas selama pembelajaran.', 'tipe' => 'angka'],
            ['id' => 39, 'kuisioner_kategori_id' => 8 , 'pertanyaan' => 'Tingkat pelayanan sekretariat panitia/ administrasi pelatihan.', 'tipe' => 'angka'],
            ['id' => 40, 'kuisioner_kategori_id' => 8 , 'pertanyaan' => 'Tingkat penyediaan fasilitas / sarana olah raga dan sarana ibadah yang disediakan.', 'tipe' => 'angka'],
            ['id' => 41, 'kuisioner_kategori_id' => 8 , 'pertanyaan' => 'Tingkat penyediaan fasilitas / pelayanan kesehatan yang diberikan.', 'tipe' => 'angka'],

            ['id' => 42, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Saran  atau catatan penting terhadap pelayanan panitia pelaksana / penyelenggara.', 'tipe' => 'text'],
            ['id' => 43, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Saran atau catatan penting tentang materi pelatihan.', 'tipe' => 'text'],
            ['id' => 44, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Saran atau catatan penting terhadap pelayanan asrama / penginapan.', 'tipe' => 'text'],
            ['id' => 45, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Saran atau catatan penting terkait penyediaan konsumsi.', 'tipe' => 'text'],
            ['id' => 46, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Catatan penting terhadap urgensi atau pentingnya penyusunan laporan studi lapangan.', 'tipe' => 'text'],
            ['id' => 47, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Saran untuk perbaikan kwalitas pelaksanaan pelatihan.', 'tipe' => 'text'],
            ['id' => 48, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Saran atau catatan penting terkait penyediaan konsumsi.', 'tipe' => 'text'],
            ['id' => 49, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Saran dan / atau saran tentang masalah pengembangan SDM aparatur.', 'tipe' => 'text'],
            ['id' => 50, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Pelatihan teknis lainnya yang relevan dengan pelaksanaan tugas / jabatan Saudara.', 'tipe' => 'text'],
            ['id' => 51, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Berikan penilaian tentang Coach (nama coach) Saudara dalam memberikan bimbingan / arahan.', 'tipe' => 'text'],
            ['id' => 52, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Fasilitator / Narasumber  yang mampu menurut Saudara menyampaikan materi pelajaran yang disertai dengan alasan.', 'tipe' => 'multi_text'],
            ['id' => 53, 'kuisioner_kategori_id' => 9 , 'pertanyaan' => 'Fasilitator / Narasumber  yang tidak mampu menurut Saudara menyampaikan materi pelajaran yang disertai dengan alasan.', 'tipe' => 'multi_text'],

        ];

        DB::table('kuisioners')->insert($kuisioners);
    }
}
