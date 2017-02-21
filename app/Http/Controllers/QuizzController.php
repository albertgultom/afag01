<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Quiz;

class QuizzController extends Controller
{
  public function index($stage,$mapel,$type)
  {
    $quizzes = Quiz::with('questions')->where([
      ['stage_id',$stage],
      ['mapel_id',$mapel],
      ['type',$type],
    ])->get();

    return response()->json($quizzes);
  }

  public function show($id)
  {
    $quiz = Quiz::find($id)->with('questions')->get();

    return response()->json($quiz);
  }
}
