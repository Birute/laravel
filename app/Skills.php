<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
  //kiekvieną kartą kreipiantis į psl sukuria naują įrašą
    public $fillable = ['language', 'rating', 'content'];
    public $timestamps = false;
}
