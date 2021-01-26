<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    // public $timestamps = false; only for not adding timestamps :)

    //take an array as value to json
    protected $casts = [
        'toppings' => 'array'
    ];
}
