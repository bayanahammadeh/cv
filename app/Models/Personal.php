<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Lang;


class Personal extends Model
{
    use HasFactory;

    public function langs()
    {
        return $this->hasMany('App\Models\Lang');
    }
    public function skills()
    {
        return $this->hasMany('App\Models\Skill');
    }
    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }
}
