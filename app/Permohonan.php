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
    	return $this->belongsTo(Department::class, 'bagian', 'id');
	}
	
	public function get_user(){
    	return $this->belongsTo('App\User', 'user_id', 'id');
	}
	
	public function get_staff(){
    	return $this->belongsTo('App\User', 'staff_id', 'id');
    }
}
