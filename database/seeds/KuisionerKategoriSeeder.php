<?php

use Illuminate\Database\Seeder;

class KuisionerKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kuisionerkategoris = [
            ['id' => 1, 'nama_kategori_kuisioner' => 'Penyelenggaraan', 'jenis_diklat_id' => 1],
            ['id' => 2, 'nama_kategori_kuisioner' => 'Materi Diklat', 'jenis_diklat_id' => 1],
            ['id' => 3, 'nama_kategori_kuisioner' => 'Penyusunan Laporan Studi Lapangan', 'jenis_diklat_id' => 1],
            ['id' => 4, 'nama_kategori_kuisioner' => 'Asrama / Penginapan', 'jenis_diklat_id' => 1],
            ['id' => 5, 'nama_kategori_kuisioner' => 'Konsumsi dan Ruang Makan', 'jenis_diklat_id' => 1],
            ['id' => 6, 'nama_kategori_kuisioner' => 'Ruangan dan Sarana Belajar', 'jenis_diklat_id' => 1],
            ['id' => 7, 'nama_kategori_kuisioner' => 'Perpustakaan dan Internet', 'jenis_diklat_id' => 1],
            ['id' => 8, 'nama_kategori_kuisioner' => 'Pendukung Diklat Lainnya', 'jenis_diklat_id' => 1],
            ['id' => 9, 'nama_kategori_kuisioner' => 'Saran untuk perbaikan dan peningkatan penyelenggaraan', 'jenis_diklat_id' => 1],
        ];
 
        DB::table('kuisioner_kategoris')->insert($kuisionerkategoris);
    }
}
