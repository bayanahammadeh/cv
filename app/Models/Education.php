<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;


    protected $table = "educations";

    protected $fillable = [
        'education_name',
        'personal_id'
    ];

    public function details(){
        return $this->hasMany('App\Models\Edudetail','education_id');
    }
}
