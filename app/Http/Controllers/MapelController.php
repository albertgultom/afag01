<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Mapel;

class MapelController extends Controller
{
  public function view($id){
    $mapel = Mapel::where('id', $id)->first();

    return response()->json($mapel);
  }
}
