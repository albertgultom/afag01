<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Stage;
use App\Mapel;

class StageController extends Controller
{
  public function home()
  {
    $stages = Stage::all();
    $mapels = Mapel::all();

    return response()->json([$stages,$mapels]);
  }
}
