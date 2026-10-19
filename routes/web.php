<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

/*Route::get('/', function () {
    return view('welcome');
});*/
//Route::get('/ttt',[UserController::class,'bbb'])->name('tt');
//Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/dashboard-overview', [PortfolioController::class, 'dashboard'])->name('dashboard');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');