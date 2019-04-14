<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalysisreportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analysisreport', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->date('tgl_pengajuan');
            $table->date('tgl_diterima_tsi');
            $table->integer('bagian');
            $table->text('klasifikasi_perbaikan');
            $table->text('uraian');
            $table->date('tgl_analisa');
            $table->text('hasil_analisa');
            $table->date('tgl_selesai');
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
        Schema::drop('analysisreport');
    }
}
