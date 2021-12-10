<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDetailPergantianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_detail_pergantian', function (Blueprint $table) {
            $table->integer('id_detail_pergantian', true);
            $table->integer('id_perbaikan')->nullable()->index('id_perbaikan_idx');
            $table->date('tgl_pergantian')->nullable();
            $table->string('nama_komponen', 45)->nullable();
            $table->integer('jml_komponen')->nullable();
            $table->integer('harga satuan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_detail_pergantian');
    }
}
