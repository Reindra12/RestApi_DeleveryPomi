<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbJenisPengecekanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_jenis_pengecekan', function (Blueprint $table) {
            $table->integer('id_jenis_pengecekan', true);
            $table->integer('id_kriteria')->nullable()->index('id_kriteria_idx');
            $table->string('jenis_pengecekan', 60)->nullable();
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
        Schema::dropIfExists('tb_jenis_pengecekan');
    }
}
