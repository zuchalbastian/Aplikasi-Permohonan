<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function department()
    {
        return $this->belongsTo(Department::class, 'id_dept', 'id');
    }
}
