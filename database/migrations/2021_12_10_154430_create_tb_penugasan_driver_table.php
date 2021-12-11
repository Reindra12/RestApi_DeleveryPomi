<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPenugasanDriverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_penugasan_driver', function (Blueprint $table) {
            $table->integer('id_penugasan', true);
            $table->integer('no_order')->nullable();
            $table->integer('id_driver')->nullable()->index('id_driver2_idx');
            $table->integer('id_kendaraan')->nullable()->index('id_kendaraan2_idx');
            $table->integer('id_petugas')->nullable();
            $table->string('tgl_penugasan', 45)->nullable();
            $table->string('jam_berangkat', 45)->nullable();
            $table->string('penjemputan', 45)->nullable();
            $table->string('tujuan', 45)->nullable();
            $table->string('kembali', 45)->nullable();
            $table->string('jml_penumpang', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_penugasan_driver');
    }
}
