<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPengecekanKendaraanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pengecekan_kendaraan', function (Blueprint $table) {
            $table->integer('id_pengecekan')->primary();
            $table->integer('id_kendaraan')->nullable()->index('id_kendaraan_idx');
            $table->integer('id_driver')->nullable()->index('id_driver_idx');
            $table->date('tgl_pengecekan')->nullable();
            $table->time('jam_pengecekan', 5)->nullable();
            $table->string('km_kendaraan', 8)->nullable();
            $table->enum('status_kendaraan', ['r', 't'])->nullable();
            $table->date('tgl_aproval')->nullable();
            $table->integer('id_petugas')->nullable()->index('id_petugas_idx');
            $table->string('no_wo', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pengecekan_kendaraan');
    }
}
