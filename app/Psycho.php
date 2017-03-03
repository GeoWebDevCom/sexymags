<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psycho extends Model
{
    protected $fillable = [
        'tid','url',
    ];
    protected $table = 'psycho';
}
