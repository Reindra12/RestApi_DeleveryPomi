<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDealerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_dealer', function (Blueprint $table) {
            $table->integer('id_dealer', true);
            $table->string('nama_dealer', 45)->nullable();
            $table->string('alamat', 45)->nullable();
            $table->string('no_tlp', 45)->nullable();
            $table->enum('status', ['y', 't'])->nullable();
            $table->enum('status_dealer', ['r', 'p'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_dealer');
    }
}
