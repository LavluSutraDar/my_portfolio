<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\MainController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\DashbordController;
use App\Http\Controllers\backend\PortfolioController;
use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\ContuctController;


use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\portfoliDetailsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//FRONTEND ROUTE
Route::get('/',[HomeController::class, 'home'])->name('home');
Route::get('/portfolio/details', [portfoliDetailsController::class, 'portfolio_details'])->name('portfolio_details');
Route::resource('/contuct', ContuctController::class);


  Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');

   Route::group(['middleware' => 'auth'], function () {

         Route::get('/dashboard', [DashbordController::class, 'dashboard'])->name('dashboard');
         Route::resource('/home', MainController::class);
         Route::resource('/services', ServiceController::class);
         Route::resource('/portfolio', PortfolioController::class);
         Route::resource('/about', AboutController::class);

   });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
