<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvestorController;

Route::prefix('investor')->name('investor.')->group(function () {

    Route::middleware(['guest:investor', 'PreventBackHistory'])->group(function () {
        Route::view('/inves', 'back.pages.investor.investor')->name('investor');
        Route::view('/loginin', 'back.pages.investor.login')->name('investor.login');
        Route::view('/homes', 'back.pages.investor.home')->name('homes');
        Route::post('/login_handler', [InvestorController::class, 'loginHandler'])->name('login_handler');
        Route::view('/forgot-password', 'back.pages.investor.auth.forgot-password')->name('forgot_password');
        Route::post('/send-password-reset-link', [InvestorController::class, 'sendPasswordResetLink'])->name('send-password-reset-link');
        Route::get('/password/reset/{token}', [InvestorController::class, 'resetPassword'])->name('reset-password');
    });

    Route::middleware(['auth', 'checkRole:investor', 'PreventBackHistory'])->group(function () {
        Route::view('/homeinvestor', 'back.pages.investor.home')->name('home');
        Route::post('/logout_handler', [InvestorController::class, 'logoutHandler'])->name('logout_handler');
    });

});
