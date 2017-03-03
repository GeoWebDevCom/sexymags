<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClTitle extends Model
{
    protected $table = 'cl_title';
    protected $fillable = [
        'title',
    ];
}
