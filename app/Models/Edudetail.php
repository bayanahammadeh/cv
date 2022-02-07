<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Education;

class Edudetail extends Model
{
    use HasFactory;
    protected $table='edudetails';

    public function education()
    {
        return $this->belongsTo(Education::class);
    }
}
