<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbKendaraanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kendaraan', function (Blueprint $table) {
            $table->integer('id_kendaraan', true);
            $table->integer('id_jenis_kendaraan')->nullable()->index('id_jenis_kendaraan_idx');
            $table->integer('id_merk')->nullable()->index('id_merk_kendaraan_idx');
            $table->integer('id_bahan_bakar')->nullable()->index('id_bahan_bakar_idx');
            $table->string('kode_asset', 20)->nullable();
            $table->string('no_polisi', 11)->nullable();
            $table->string('nomor_rangka', 45)->nullable();
            $table->string('nomor_mesin', 45)->nullable();
            $table->string('nama_kendaraan', 20)->nullable();
            $table->string('warna', 20)->nullable();
            $table->date('tanggal_pembelian')->nullable();
            $table->integer('harga')->nullable();
            $table->string('jenis_penggerak', 8)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_kendaraan');
    }
}
