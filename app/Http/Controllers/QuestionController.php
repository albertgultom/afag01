<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Question;

class QuestionController extends Controller
{
  public function bank($mapel,$stage)
  {
    $stage_id = DB::table('stages')->where('alias',$stage)->value('id');
    $mapel_id = DB::table('mapels')->where('name',$mapel)->value('id');

    $questions = Question::where([
      ['stage_id',$stage_id],
      ['mapel_id',$mapel_id],
    ])->get();

    return response()->json($questions);
  }

  public function test($stage)
  {
    // dd($stage);
  }
}
