<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPersetujuanPerbaikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_persetujuan_perbaikan', function (Blueprint $table) {
            $table->integer('id_persetujuan', true);
            $table->integer('no_wo')->nullable();
            $table->integer('id_pengecekan')->nullable();
            $table->integer('id_petugas')->nullable()->index('id_petugas_idx');
            $table->date('tgl_persetujuan')->nullable();
            $table->enum('status', ['s', 't'])->nullable();
            $table->enum('status_perbaikan', ['c', 'k'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_persetujuan_perbaikan');
    }
}
