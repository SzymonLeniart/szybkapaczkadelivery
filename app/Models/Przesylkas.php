<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Przesylkas extends Model
{
    use HasFactory;

    protected $fillable = [

        'nr_listu',
        'info',
        'dostawa',
        'status',
    ];
}
