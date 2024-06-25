<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvestorController;

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
Route::get('admin/registerhome', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('admin/registerhome', [RegisterController::class, 'register']);


Route::get('/', function () {
    return view('welcome');
});



Route::get('/about', function () {
    return view('about');
});

Route::post('/resources/views/email-templates/contact', [ContactController::class, 'send']);


// Routes for login and logout
Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminController::class, 'loginHandler'])->name('web.loginHandler');
Route::post('/logout', [AdminController::class, 'logoutHandler'])->name('logout');

// Dashboard routes for different roles
Route::get('/admin/dashboard', [AdminController::class, 'back.pages.admin.home'])->name('admin.dashboard')->middleware('auth');
Route::get('/umkm/dashboard', [AdminController::class, 'back.pages.interprener.home'])->name('umkm.dashboard')->middleware('auth');
Route::get('/investor/dashboard', [InvestorController::class, 'back.pages.investor.home'])->name('investor.dashboard')->middleware('auth');