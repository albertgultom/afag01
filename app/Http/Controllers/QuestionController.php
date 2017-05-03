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
    $stage_id = DB::table('stages')->where('alias', $request->stage)->value('id');
    $mapel = DB::table('mapels')->where('name', $request->mapel)->first();
    $mapelname = $mapel->fullname;

    $pg = Question::where([
      ['stage_id', '<=', $stage_id],
      ['mapel_id', $mapel->id],
      ['type', 1]
    ])
    ->orderBy('type', 'asc')
    ->orderBy('stage_id', 'desc')
    ->orderBy('level', 'asc')
    ->get();

    $es = Question::where([
      ['stage_id', '<=', $stage_id],
      ['mapel_id', $mapel->id],
      ['type', 2]
    ])
    ->orderBy('type', 'asc')
    ->orderBy('stage_id', 'desc')
    ->orderBy('level', 'asc')
    ->get();

    return response()->json([$pg, $es, $mapelname]);
  }

  public function pg(Request $request)
  {
    $pg = Question::where([
      ['stage_id', '<=', $request->stage],
      ['mapel_id', $request->mapel],
      ['type', 1]
    ])
    ->orderBy('type', 'asc')
    ->orderBy('stage_id', 'desc')
    ->orderBy('level', 'asc')
    ->paginate($request->show);

    return response()->json($pg);
  }

  public function es(Request $request)
  {
    $es = Question::where([
      ['stage_id', '<=', $request->stage],
      ['mapel_id', $request->mapel],
      ['type', 2]
    ])
    ->orderBy('type', 'asc')
    ->orderBy('stage_id', 'desc')
    ->orderBy('level', 'asc')
    ->paginate($request->show);

    return response()->json($es);
  }

  public function test(Request $request)
  {
    $_req = DB::table('questions')->where('type', 1)->paginate($request->show);
    // dd($_req);
    return response()->json($_req);
  }
}
