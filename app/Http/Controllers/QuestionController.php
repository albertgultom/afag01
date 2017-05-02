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

  public function test($req)
  {
    $_req = DB::table('mapels')->where('name', $req)->first();
    dd($_req->fullname);
  }
}
