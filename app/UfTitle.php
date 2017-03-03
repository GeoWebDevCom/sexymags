<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UfTitle extends Model
{
    protected $table = 'uf_title';
    protected $fillable = [
        'title',
    ];
}
