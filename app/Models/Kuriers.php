<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuriers extends Model
{
    use HasFactory;

    protected $fillable = [
        'imie_k',
        'nazwisko_k',
        'telefon',
        'pesel',
    ];
}
