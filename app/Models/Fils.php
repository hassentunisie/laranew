<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fils extends Model
{
    use HasFactory;
    public function Pere(){
        return $this->belongsTo(Pere::class);
    }
}
