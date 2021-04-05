<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('clubs', [LandingPageController::class,'clubs'])->name('landing.clubs');
route::get('players', [LandingPageController::class,'players'])->name('landing.players');
route::get('managers', [LandingPageController::class,'managers'])->name('landing.managers');
route::get('stadiums', [LandingPageController::class,'stadiums'])->name('landing.stadiums');

Route::resource('/', LandingPageController::class);