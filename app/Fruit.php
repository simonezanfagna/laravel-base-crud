<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
  protected $fillable = ['name', 'peso', 'varieta'];
}
