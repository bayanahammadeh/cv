<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Edudetail;

class Education extends Model
{
    use HasFactory;
    protected $table='educations';

    public function edudetails()
    {
        return $this->hasMany(Edudetail::class);
    }
}
