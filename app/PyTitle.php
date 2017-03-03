<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PyTitle extends Model
{
    protected $table = 'py_title';
    protected $fillable = [
        'title',
    ];
}
