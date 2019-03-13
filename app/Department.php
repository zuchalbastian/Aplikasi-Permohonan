<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
	protected $primaryKey = 'id';
	protected $fillable = ['name', 'slug'];
	public $timestamps = false;
}
