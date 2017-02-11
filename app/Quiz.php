<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
  public function mapel()
  {
    return $this->belongsTo('App\Mapel');
  }

  public function grade()
  {
    return $this->belongsTo('App\Grade');
  }
  
  public function questions()
  {
    return $this->belongsToMany('App\Question');
  }
}
