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
            $table->integer('user_id')->unsigned();
            $table->date('tgl_pengajuan');
            $table->date('tgl_diterima_tsi');
            $table->integer('bagian');
            $table->text('klasifikasi_perbaikan');
            $table->text('dokumen_pendukung');
            $table->text('uraian');
            $table->string('status')->default('baru');
            
            $table->integer('staff_id')->nullable();
            $table->date('tgl_analisa')->nullable();
            $table->text('hasil_analisa')->nullable();
            $table->date('tgl_selesai')->nullable();
            $table->text('uraian_hasil_analisa')->nullable();
            $table->text('alasan')->nullable();
            $table->string('flag')->nullable();

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
        Schema::drop('permohonan');
    }
}
