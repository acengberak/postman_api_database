<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLantaiSatuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lantai_satu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->decimal('posisi_awal');
            $table->decimal('posisi_akhir');
            $table->decimal('jumlah_kwh');
            $table->integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lantai_satu');
    }
}
