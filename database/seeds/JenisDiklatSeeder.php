<?php

use Illuminate\Database\Seeder;

class JenisDiklatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenisdiklat = [
            ['id' => '1','nama_jenis_diklats' => 'Pelatihan Administrator' ],
            ['id' => '2','nama_jenis_diklats' => 'Prajabatan' ],
            ['id' => '3','nama_jenis_diklats' => 'Teknis/Fungsional' ]
        ];

        DB::table('jenis_diklats')->insert($jenisdiklat);
    }
}
