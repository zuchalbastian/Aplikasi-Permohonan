<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportJob extends Model
{
    protected $table = 'reportjob';
	protected $primaryKey = 'id';
	protected $fillable = ['nip_staff', 'name_staff', 'bagian', 'klasifikasi_perbaikan', 'uraian', 'tgl_analisa', 'hasil_analisa', 'tgl_selesai', 'status' ];
	public $timestamps = false;

	public function get_department(){
    	return $this->belongsTo('App\\Department', 'bagian', 'id');
    }
}
