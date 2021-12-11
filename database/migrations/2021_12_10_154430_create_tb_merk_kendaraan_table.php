<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMerkKendaraanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_merk_kendaraan', function (Blueprint $table) {
            $table->integer('id_merk', true);
            $table->string('nama_merk', 45)->nullable();
            $table->enum('status', ['y', 't'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_merk_kendaraan');
    }
}
