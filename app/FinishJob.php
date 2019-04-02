<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinishJob extends Model
{
    protected $table = 'finishjob';
	protected $primaryKey = 'id';
	protected $fillable = ['nip_staff', 'name_staff', 'bagian', 'klasifikasi_perbaikan', 'uraian', 'tgl_analisa', 'hasil_analisa', 'tgl_selesai', ];
	public $timestamps = false;

	public function get_department(){
    	return $this->belongsTo('App\\Department', 'bagian', 'id');
    }
}
