<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailKuisionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_kuisioners', function (Blueprint $table) {
            $table->string('nip');
            $table->unsignedBigInteger('kuisioner_id');
            $table->unsignedBigInteger('diklat_id');
            $table->char('tahun',4);
            $table->json('isi');
            $table->timestamps();

            $table->primary(['nip','kuisioner_id','diklat_id','tahun']);

            $table->foreign('nip')->references('nip_email')->on('pesertas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kuisioner_id')->references('id')->on('kuisioners')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['diklat_id','tahun'])->references(['nama_diklat_id','tahun'])->on('detail_diklats')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_kuisioners');
    }
}
