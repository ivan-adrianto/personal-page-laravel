<?php

use App\Http\Controllers\PortfolioController;
use App\Models\About;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        "about" => About::get_data()
    ]);
});

Route::get('/portfolio', [PortfolioController::class, 'index']);

Route::get('/portfolio/{type}', [PortfolioController::class, 'detail']);
