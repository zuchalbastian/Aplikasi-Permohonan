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
            'user_id' => '2',
            'tgl_pengajuan' => '2019-02-08',
            'tgl_diterima_tsi' => '2019-02-23',
            'bagian' => '5',
            'klasifikasi_perbaikan' => 'penambahan_fitur',
            'dokumen_pendukung' => 'CCF30019_0001.pdf',
            'uraian' => 'asadsad',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('permohonan')->insert([
            'user_id' => '2',
            'tgl_pengajuan' => '2019-02-15',
            'tgl_diterima_tsi' => '2019-02-26',
            'bagian' => '3',
            'klasifikasi_perbaikan' => 'lain_lain',
            'dokumen_pendukung' => '2269-5485-5-PB.pdf',
            'uraian' => 'dsadsadasd',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

         DB::table('permohonan')->insert([
            'user_id' => '2',
            'tgl_pengajuan' => '2019-02-17',
            'tgl_diterima_tsi' => '2019-02-27',
            'bagian' => '4',
            'klasifikasi_perbaikan' => 'modifikasi_fitur',
            'dokumen_pendukung' => 'PeringatanA.pdf',
            'uraian' => 'bvbdbdfbd',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('permohonan')->insert([
            'user_id' => '1',
            'tgl_pengajuan' => '2019-02-23',
            'tgl_diterima_tsi' => '2019-02-28',
            'bagian' => '1',
            'klasifikasi_perbaikan' => 'penambahan_fitur',
            'dokumen_pendukung' => 'PeringatanA.pdf',
            'uraian' => 'bvbdbdfbd',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
