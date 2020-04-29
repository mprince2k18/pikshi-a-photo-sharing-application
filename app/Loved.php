<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loved extends Model
{
    protected $guarded =['id'];

    function post()
    {
      return $this->belongsTo('App\Post');
    }

}
