<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class linkDB extends Model
{
    protected $table = 'links';
    protected $fillable = ['title', 'link', 'favorites', 'view', 'ownerid'];
}
