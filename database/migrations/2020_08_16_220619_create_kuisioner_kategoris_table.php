<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuisionerKategorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuisioner_kategoris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kategori_kuisioner');
            $table->unsignedBigInteger('jenis_diklat_id');
            $table->timestamps();

            $table->foreign('jenis_diklat_id')->references('id')->on('jenis_diklats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kuisioner_kategoris');
    }
}
