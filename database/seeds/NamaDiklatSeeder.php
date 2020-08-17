<?php

use Illuminate\Database\Seeder;

class NamaDiklatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $namadiklats = [
           ['id' => 1, 'nama_diklats' => 'Pelatihan Administrator Untuk Ahli Muda', 'jenis_diklat_id' => 1],
           ['id' => 2, 'nama_diklats' => 'Pelatihan Prajabatan Eslon 4', 'jenis_diklat_id' => 2]
       ];

       DB::table('nama_diklats')->insert($namadiklats);
    }
}
