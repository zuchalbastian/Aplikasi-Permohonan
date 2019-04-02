<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
	protected $primaryKey = 'id';
	protected $fillable = ['name', 'slug'];
	public $timestamps = false;

	public function get_permohonan(){
    	return $this->hasMany('App\\Permohonan', 'bagian', 'id');
	}
	
	public function get_tindaklanjut(){
    	return $this->hasMany('App\\TindakLanjut', 'bagian', 'id');
	}
	
	public function get_finishjob(){
    	return $this->hasMany('App\\FinishJob', 'bagian', 'id');
    }
}
