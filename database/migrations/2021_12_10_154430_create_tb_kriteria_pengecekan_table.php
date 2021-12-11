<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbKriteriaPengecekanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kriteria_pengecekan', function (Blueprint $table) {
            $table->integer('id_kriteria', true);
            $table->string('nama_kriteria', 45)->nullable();
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
        Schema::dropIfExists('tb_kriteria_pengecekan');
    }
}
