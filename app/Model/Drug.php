<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    protected $fillable = [
        'name', 'qty',
    ];

}
