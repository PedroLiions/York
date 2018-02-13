<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public static function lastProducts(){
      return Produto::orderBy('id', 'desc')->take(3)->get();
    }
}
