<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Question;

class QuestionController extends Controller
{
  public function bank(Request $request)
  {
    $question = Question::where([
      ['stage_id', '<=', $request->stage],
      ['mapel_id', $request->mapel],
      ['type', $request->type],
    ])
    ->orderBy('stage_id', 'desc')
    ->orderBy('level', 'asc')
    ->paginate($request->show);

    return response()->json($question);
  }

  public function test(Request $request)
  {
    $_req = DB::table('questions')->where('type', 1)->paginate($request->show);
    // dd($_req);
    return response()->json($_req);
  }
}
