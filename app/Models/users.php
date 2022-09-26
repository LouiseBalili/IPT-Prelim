<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    public function trainors()
    {
        return $this->hasMany('app\Models\trainors');
    }

    public function trainees()
    {
        return $this->hasMany('app\Models\trainees');
    }
}
