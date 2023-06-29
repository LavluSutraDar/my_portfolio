<?php

namespace App\Http\Controllers\frontend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portfolio;

class portfoliDetailsController extends Controller
{
    public function portfolio_details()
    {
        $portfolios = Portfolio::all();
        $services = Service::all();
        return view('frontend.portfolio.portfolio_details', compact('services', 'portfolios'));
    }
}
