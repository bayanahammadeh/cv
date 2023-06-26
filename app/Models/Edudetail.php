<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edudetail extends Model
{
    use HasFactory;

    protected $table = "edudetails";

    protected $fillable = [
        'edu_name',
        'detail',
        'education_id'
    ];
}
