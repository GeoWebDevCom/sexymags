<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SfTitle extends Model
{
    protected $table = 'sf_title';
    protected $fillable = [
        'title',
    ];
}
