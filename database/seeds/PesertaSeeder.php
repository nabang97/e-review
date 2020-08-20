<?php

use Illuminate\Database\Seeder;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pesertas')->insert([
            'nip_email' => '199704121201102201',
            'jenis_kelamin' => '1'
        ]);
    }
}
