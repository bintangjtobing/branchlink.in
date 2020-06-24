<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class optionaldb extends Model
{
    protected $table = 'optionaldbs';
    protected $fillable = [
        'titlepage',
        'email',
        'instagram',
        'twitter',
        'facebook',
        'userid',
    ];
}
