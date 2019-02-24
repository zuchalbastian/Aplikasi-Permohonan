<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    protected $table = 'permohonan';
	protected $primaryKey = 'id';
	protected $fillable = ['tgl_pengajuan', 'tgl_diterima_tsi', 'bagian', 'klasifikasi_perbaikan', 'dokumen_pendukung', 'uraian'];
	public $timestamps = false;
}
