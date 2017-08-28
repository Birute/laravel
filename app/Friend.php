<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    public $fillable = ['name', 'birthday', 'phone', 'photo'];
}
