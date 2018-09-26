<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    protected $fillable = ['title', 'subtitle', 'img', 'delete_by'];
}
