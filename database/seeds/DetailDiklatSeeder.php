<?php

use Illuminate\Database\Seeder;

class DetailDiklatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detaildiklats = [
            ['nama_diklat_id' => 1, 'tahun' => 2020, 'tanggal' => '2020-08-17', 'tempat_pelatihan'=> 'BPSDM Sumbar'],
            ['nama_diklat_id' => 2, 'tahun' => 2020, 'tanggal' => '2020-08-17', 'tempat_pelatihan'=> 'BPSDM Sumbar'],
        ];
 
        DB::table('detail_diklats')->insert($detaildiklats);
    }
}
