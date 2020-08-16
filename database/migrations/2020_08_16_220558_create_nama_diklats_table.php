<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNamaDiklatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nama_diklats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_diklats');
            $table->unsignedBigInteger('jenis_diklat_id');
            $table->timestamps();

            $table->foreign('jenis_diklat_id')->references('id')->on('jenis_diklats')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nama_diklats');
    }
}
