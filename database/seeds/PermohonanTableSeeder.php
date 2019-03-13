<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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

        DB::table('permohonan')->insert([
            'tgl_pengajuan' => '2019-02-15',
            'tgl_diterima_tsi' => '2019-02-26',
            'bagian' => 'kendaraandinas',
            'klasifikasi_perbaikan' => 'lain_lain',
            'dokumen_pendukung' => '2269-5485-5-PB.pdf',
            'uraian' => 'dsadsadasd'
        ]);

         DB::table('permohonan')->insert([
            'tgl_pengajuan' => '2019-02-17',
            'tgl_diterima_tsi' => '2019-02-27',
            'bagian' => 'administrasi',
            'klasifikasi_perbaikan' => 'modifikasi_fitur',
            'dokumen_pendukung' => 'PeringatanA.pdf',
            'uraian' => 'bvbdbdfbd'
        ]);
    }
}
