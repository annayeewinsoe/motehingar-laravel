<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motehingar extends Model
{
    // use HasFactory;
    protected $table = 'motehingar';

    protected $casts = [
        'flavour'=>'array',
        'toppings'=>'array'
    ];
}
