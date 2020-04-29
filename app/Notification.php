<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
  protected $guarded =['id'];

  function user()
  {
    return $this->belongsTo('App\User');
  }
  
}
