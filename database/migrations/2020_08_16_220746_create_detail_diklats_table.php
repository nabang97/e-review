<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailDiklatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_diklats', function (Blueprint $table) {
            $table->unsignedBigInteger('nama_diklat_id');
            $table->char('tahun',4);
            $table->date('tanggal');
            $table->string('tempat_pelatihan');
            $table->timestamps();

            $table->primary(['nama_diklat_id','tahun']);

            $table->foreign('nama_diklat_id')->references('id')->on('nama_diklats')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_diklats');
    }
}
