<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Euus extends Model
{
    protected $fillable = [
        'tid','url',
    ];
    protected $table = 'euus';
}
