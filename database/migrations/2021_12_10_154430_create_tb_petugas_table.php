<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_petugas', function (Blueprint $table) {
            $table->integer('id_petugas', true);
            $table->string('no_badge', 10)->nullable();
            $table->integer('id_jabatan')->nullable()->index('id_jabatan_idx');
            $table->integer('id_departemen')->nullable()->index('id_departemen_idx');
            $table->string('nama_lengkap', 45)->nullable();
            $table->string('tempat_lahir', 20)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->date('tgl_mulai_kerja')->nullable();
            $table->string('Telp', 45)->nullable();
            $table->string('user', 45)->nullable();
            $table->string('password', 45)->nullable();
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
        Schema::dropIfExists('tb_petugas');
    }
}
