<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermohonanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::drop('permohonan');
    }
}
