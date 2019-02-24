<?php

use Illuminate\Database\Seeder;

class PermohonanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('permohonan')->insert([
            'tgl_pengajuan' => '2019-02-08',
            'tgl_diterima_tsi' => '2019-02-23',
            'bagian' => 'keuangan',
            'klasifikasi_perbaikan' => 'penambahan_fitur',
            'dokumen_pendukung' => 'CCF30019_0001.pdf',
            'uraian' => 'asadsad'
        ]);
    }
}
