<?php

namespace App\Models;

use App\Models\Social;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Personal extends Model
{
    use HasFactory;

    protected $table = "personals";

    protected $fillable = [
        'fname',
        'lname',
        'title',
        'description',
        'email',
        'mobile',
        'phone',
        'pdf',
        'address'
    ];

    public function socials(){
        return $this->hasMany('App\Models\Social','personal_id');
    }
    public function skills(){
        return $this->hasMany('App\Models\Skill','personal_id');
    }
}
