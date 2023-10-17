<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SkillController;
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
        "about" => About::all()
    ]);
});

Route::get('/portfolio', [PortfolioController::class, 'index']);

Route::get('/portfolio/{type}', [PortfolioController::class, 'detail']);

Route::get('/admin/login', [LoginController::class, 'index'])->middleware('guest');

Route::post('/admin/login', [LoginController::class, 'authenticate'])->name('login');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/admin/skills', [SkillController::class, 'index'])->middleware('auth')->name('skills');

Route::get('/admin/portfolios', [PortfolioController::class, 'portfolioDasboard'])->middleware('auth')->name('portfolios');

Route::get('/admin/education', [EducationController::class, 'index'])->middleware('auth')->name('education');

Route::get('/admin/experiences', [ExperienceController::class, 'index'])->middleware('auth')->name('experiences');

Route::get('/admin/about', [AboutController::class, 'index'])->middleware('auth')->name('about');

Route::get('/admin/skills/create', [SkillController::class, 'create'])->middleware('auth')->name('about');

Route::post('/admin/skills', [SkillController::class, 'store']);
