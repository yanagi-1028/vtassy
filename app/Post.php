<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
  protected $gurded = array('id');
  
  public static $rules = array(
     'title' => 'required',
     'content' => 'required',
      );
}
