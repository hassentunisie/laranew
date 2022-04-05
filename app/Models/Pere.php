<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pere extends Model
{
    use HasFactory;
    public function fils(){
        return $this->hasMany(Fils::class);
    }
}
