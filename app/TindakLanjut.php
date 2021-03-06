<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TindakLanjut extends Model
{
    protected $table = 'tindaklanjut';
	protected $primaryKey = 'id';
	protected $fillable = ['nip_staff', 'name_staff', 'tgl_pengajuan', 'tgl_diterima_tsi', 'bagian', 'klasifikasi_perbaikan', 'dokumen_pendukung', 'uraian', 'status'];
	public $timestamps = false;

	public function get_department(){
    	return $this->belongsTo('App\\Department', 'bagian', 'id');
    }
}
