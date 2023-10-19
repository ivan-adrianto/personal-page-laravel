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

Route::get('/admin/education', [EducationController::class, 'index'])->middleware('auth')->name('education');

Route::post('/admin/education', [EducationController::class, 'store']);

Route::get('/admin/education/create', [EducationController::class, 'create'])->middleware('auth')->name('education');

Route::get('/admin/education/{education_id}', [EducationController::class, 'edit'])->middleware('auth')->name('education');

Route::put('/admin/education/{education_id}', [EducationController::class, 'update']);

Route::delete('/admin/education/{education_id}', [EducationController::class, 'destroy']);

Route::get('/admin/experiences', [ExperienceController::class, 'index'])->middleware('auth')->name('experiences');

Route::get('/admin/experiences/create', [ExperienceController::class, 'create'])->middleware('auth')->name('experiences');

Route::post('/admin/experiences', [ExperienceController::class, 'store']);

Route::get('/admin/experiences/{experience_id}', [ExperienceController::class, 'edit'])->middleware('auth')->name('experiences');

Route::delete('/admin/experiences/{experience_id}', [ExperienceController::class, 'destroy']);

Route::put('/admin/experiences/{experience_id}', [ExperienceController::class, 'update']);

Route::get('/admin/skills/create', [SkillController::class, 'create'])->middleware('auth')->name('about');

Route::post('/admin/skills', [SkillController::class, 'store']);

Route::get('/admin/skills/{skill_id}', [SkillController::class, 'edit'])->middleware('auth')->name('about');

Route::put('/admin/skills/{skill_id}', [SkillController::class, 'update']);

Route::delete('/admin/skills/{skill_id}', [SkillController::class, 'destroy']);

Route::get('/admin/about/edit', [AboutController::class, 'edit'])->middleware('auth')->name('about');

Route::get('/admin/about', [AboutController::class, 'index'])->middleware('auth')->name('about');

Route::put('/admin/about', [AboutController::class, 'update']);

Route::get('/admin/portfolios', [PortfolioController::class, 'portfolioDasboard'])->middleware('auth')->name('portfolios');

Route::get('/admin/portfolios/create', [PortfolioController::class, 'create'])->middleware('auth')->name('portfolios');

Route::post('/admin/portfolios', [PortfolioController::class, 'store']);

Route::get('/admin/portfolios/{portfolio_id}', [PortfolioController::class, 'edit'])->middleware('auth')->name('portfolios');

Route::delete('/admin/portfolios/{portfolio_id}', [PortfolioController::class, 'destroy']);

Route::put('/admin/portfolios/{portfolio_id}', [PortfolioController::class, 'update']);

