<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmController;

Route::prefix('umkm')->name('umkm.')->group(function(){

        Route::middleware(['guest:umkm', 'PreventBackHistory'])->group(function(){
            Route::controller(UmkmController::class)->group(function(){
                // Route::get('/loginu','back.pages.umkm.auth.login')->name('umkm.login');
                Route::get('/register','back.pages.umkm.auth.register')->name('register');
                Route::get('/home','back.pages.interprener.home')->name('home');
                Route::POST('/login_handler',[UmkmController::class,'loginHandler'])->name('login_handler');
                Route::View('/forgot-password','back.pages.admin.auth.forgot-password')->name('forgot_password');
                Route::POST('/send-password-reset-link',[UmkmController::class,'sendPasswordResetLink'])->name('send-password-reset-link',);
                Route::GET('/password/reset/{token}',[UmkmController::class, 'resetPassword'])->name('reset-password');
            });
        });
        Route::middleware([])->group(function(){
            Route::controller(UmkmController::class)->group(function(){
                
            });
        });
     
});