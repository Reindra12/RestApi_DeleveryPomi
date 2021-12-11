<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDetailPengecekanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_detail_pengecekan', function (Blueprint $table) {
            $table->integer('id_detail_pengecekan', true);
            $table->integer('id_pengecekan')->nullable()->index('id_pengecekan1');
            $table->integer('id_jenis_pengecekan')->nullable()->index('id_jenis_pengecekan1_idx');
            $table->enum('kondisi', ['b', 'r'])->nullable();
            $table->enum('waktu_pengecekan', ['m', 'a', 'n'])->nullable();
            $table->longText('keterangan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_detail_pengecekan');
    }
}
