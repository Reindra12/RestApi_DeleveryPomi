<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPerbaikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_perbaikan', function (Blueprint $table) {
            $table->integer('id_perbaikan', true);
            $table->integer('id_persetujuan')->nullable()->index('id_persetujuan_idx');
            $table->integer('id_dealer')->nullable()->index('id_dealer_idx');
            $table->date('tgl_perbaikan')->nullable();
            $table->date('tgl_selesai')->nullable();
            $table->enum('status_perbaikan', ['p', 's'])->nullable();
            $table->integer('total_biaya_perbaikan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_perbaikan');
    }
}
