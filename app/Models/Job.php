<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Experience;

class Job extends Model
{
    use HasFactory;

    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }
}
