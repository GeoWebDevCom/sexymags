<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caoliu extends Model
{
    protected $fillable = [
        'tid','url',
    ];
    protected $table = 'caoliu';
}
