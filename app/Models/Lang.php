<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Personal;

class Lang extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname', 'lname','title', 'aboutme','email', 'mobile','phone', 'address'
    ];

    public function personal(){
        return  $this->belongsTo('App\Models\Personal');
     }
}
