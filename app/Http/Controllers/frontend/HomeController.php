<?php

namespace App\Http\Controllers\frontend;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
   public function home(){
      //$homes = Home::all();
      $homes = DB::table('homes')->get();
    return view('frontend.master', compact('homes'));
   }
}
