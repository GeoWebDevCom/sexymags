<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selfie extends Model
{
    protected $table = 'selfie';
    protected $fillable = [
        'tid','url',
    ];
}
