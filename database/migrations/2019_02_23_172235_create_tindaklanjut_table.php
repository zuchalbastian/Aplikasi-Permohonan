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
            $table->integer('nip_staff')->unsigned();
            $table->string('name_staff');
            $table->date('tgl_pengajuan');
            $table->date('tgl_diterima_tsi');
            $table->text('bagian');
            $table->text('klasifikasi_perbaikan');
            $table->text('dokumen_pendukung');
            $table->text('uraian');
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
