<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    protected $table = 'permohonan';
	protected $primaryKey = 'id';
	protected $fillable = ['user_id', 'tgl_pengajuan', 'tgl_diterima_tsi', 'bagian', 'klasifikasi_perbaikan', 'dokumen_pendukung', 'uraian', 'status'];
	public $timestamps = false;

	public function get_department(){
    	return $this->belongsTo('App\\Department', 'bagian', 'id');
    }
}
