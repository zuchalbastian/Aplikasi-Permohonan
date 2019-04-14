<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTindaklanjutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tindaklanjut', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->date('tgl_pengajuan');
            $table->date('tgl_diterima_tsi');
            $table->integer('bagian');
            $table->text('klasifikasi_perbaikan');
            $table->text('dokumen_pendukung');
            $table->text('uraian');
            $table->string('status')->default('baru');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tindaklanjut');
    }
}
