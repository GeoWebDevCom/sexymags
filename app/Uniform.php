<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uniform extends Model
{
    protected $fillable = [
        'tid','url',
    ];
    protected $table = 'uniform';
}
