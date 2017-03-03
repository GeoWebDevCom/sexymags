<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asian extends Model
{
    protected $fillable = [
        'tid','url',
    ];
    protected $table = 'asian';
}
