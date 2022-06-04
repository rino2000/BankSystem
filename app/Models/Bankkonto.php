<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bankkonto extends Model
{
    use HasFactory;

    public function userModel(){
        return $this->hasMany(User::class);
    }
}
