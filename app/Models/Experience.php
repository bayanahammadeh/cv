<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $table = "experiences";

    protected $fillable = [
        'period',
        'personal_id'
    ];

    public function jobs(){
        return $this->hasMany('App\Models\Job','experience_id');
    }
}
