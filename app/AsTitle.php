<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsTitle extends Model
{
    protected $table = 'as_title';
    protected $fillable = [
        'title',
    ];
}
