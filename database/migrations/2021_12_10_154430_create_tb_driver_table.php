<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDriverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_driver', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_driver');
            $table->string('user')->unique('tb_driver_user_unique');
            $table->integer('id_departemen')->nullable()->index('id_departemen1_idx');
            $table->string('no_badge', 10)->nullable();
            $table->string('no_ktp', 16)->nullable();
            $table->string('alamat', 60)->nullable();
            $table->string('no_tlp', 15)->nullable();
            $table->string('no_sim', 13)->nullable();
            $table->string('foto_ktp', 45)->nullable();
            $table->string('foto_SIM', 45)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('status')->default('aktif');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_driver');
    }
}
