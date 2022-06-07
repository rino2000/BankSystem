<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaktion extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'transaktionen';

    public function bankkonten()
    {
        return $this->hasMany(Bankkonto::class);
    }
}
