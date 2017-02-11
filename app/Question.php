<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
  public function mapel()
  {
    return $this->belongsTo('App\Mapel');
  }

  public function grade()
  {
    return $this->belongsTo('App\Grade');
  }

  public function quizzes()
  {
    return $this->belongsToMany('App\Quiz');
  }
}
