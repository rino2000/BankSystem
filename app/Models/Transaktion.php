<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaktion extends Model
{
    use HasFactory;

    public function bankkontoModel()
    {
        return $this->hasMany(Bankkonto::class);
    }
}
