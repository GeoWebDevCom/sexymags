<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $fillable = [
        'tid','url',
    ];
    protected $table = 'anime';
}
