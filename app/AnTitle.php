<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnTitle extends Model
{
    protected $table = 'an_title';
    protected $fillable = [
        'title',
    ];
}
