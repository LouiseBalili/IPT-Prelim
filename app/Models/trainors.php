<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainors extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo('app\Models\users');
    }

    public function courses()
    {
        return $this->hasMany('app\Models\courses');
    }
}
