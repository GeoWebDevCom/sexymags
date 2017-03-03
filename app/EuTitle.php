<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EuTitle extends Model
{
    protected $table = 'eu_title';
    protected $fillable = [
        'title',
    ];
}
