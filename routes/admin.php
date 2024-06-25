<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;



Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
        Route::View('/login','back.pages.admin.auth.login')->name('login');
        // Route::POST('/login_handler',[AdminController::class,'loginHandler'])->name('login_handler');
        Route::View('/forgot-password','back.pages.admin.auth.forgot-password')->name('forgot_password');
        Route::POST('/send-password-reset-link',[AdminController::class,'sendPasswordResetLink'])->name('send-password-reset-link',);
        Route::GET('/password/reset/{token}',[AdminController::class, 'resetPassword'])->name('reset-password');
    });
    Route::middleware(['auth', 'checkRole:admin','PreventBackHistory'])->group(function(){
        // Route::View('/homeadmin','back.pages.admin.home')->name('home.admin');
        // Route::POST('/logout_handler', [AdminController::class,'logoutHandler'])->name('logout_handler');
    });
    Route::middleware(['guest:admin'])->group(function(){
        Route::view('/registerhome', 'back.pages.admin.auth.register')->name('registerhome');
        Route::post('/registerhome', [RegisterController::class, 'register']);
        
       
        
    });
    Route::middleware(['guest:admin'])->group(function(){
        Route::View('/welcome', 'welcome')->name('welcome');
        Route::View('/investor', 'back.pages.investor.investor')->name('investor');
        Route::view('/umkm', 'back.pages.interprener.interprener')->name('interprener');
        Route::View('/about', 'about')->name('about');
    });
    Route::middleware(['guest:admin'])->group(function(){
        Route::View('/error', 'email-templates.error')->name('error');

    });
});