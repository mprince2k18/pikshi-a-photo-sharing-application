<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded =['id'];

    function user()
    {
      return $this->hasOne('App\User','id','user_id');
    }
}
