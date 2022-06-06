<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bankkonto extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'bankkonto';

    public function userModel()
    {
        return $this->hasMany(User::class);
    }
}
