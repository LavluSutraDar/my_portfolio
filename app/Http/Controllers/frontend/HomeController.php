<?php

namespace App\Http\Controllers\frontend;

use App\Models\Home;
use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\About;

class HomeController extends Controller
{
   public function home(){
      $abouts = About::all();
      $portfolios = Portfolio::all();
      $homes = DB::table('homes')->get();
      $services = Service::all();
    return view('frontend.master', 
    compact('homes', 'services', 'portfolios', 'abouts'));
   }
}
