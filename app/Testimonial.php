<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
  //kiekvieną kartą kreipiantis į psl sukuria naują įrašą
    public $fillable = ['name', 'time', 'content'];
    public $timestamps = false;
}
