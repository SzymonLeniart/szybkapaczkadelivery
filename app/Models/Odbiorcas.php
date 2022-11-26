<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odbiorcas extends Model
{
    use HasFactory;
    
        protected $fillable = [
            'first_name_o',
            'last_name_o',
            'street_o',
            'city_o',
            'postal_code_o',
        ];
}
