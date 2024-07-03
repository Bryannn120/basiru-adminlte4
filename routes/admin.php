<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::prefix('admin')->name('admin.')->group(function () {

    // Authentication routes
    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'back.pages.admin.auth.login')->name('login');
        Route::post('/login_handler', [AdminController::class, 'loginHandler'])->name('login_handler');
        Route::view('/forgot-password', 'back.pages.admin.auth.forgot-password')->name('forgot_password');
        Route::post('/send-password-reset-link', [AdminController::class, 'sendPasswordResetLink'])->name('send-password-reset-link');
        Route::get('/password/reset/{token}', [AdminController::class, 'resetPassword'])->name('reset-password');
    });

    // Dashboard and logout routes
    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
        Route::view('/homeadmin', 'back.pages.admin.home')->name('home');
        Route::post('/logout_handler', [AdminController::class, 'logoutHandler'])->name('logout_handler');
    });

//     // Registration route
//     Route::middleware(['guest:admin'])->group(function () {
//       // Tampilkan formulir registrasi
// Route::get('/registerhome', [RegisterController::class, 'showRegistrationForm'])->name('show_registration_form');

// // Proses registrasi
// Route::post('/registerhome', [RegisterController::class, 'register'])->name('register');
//     });

    // Other guest routes
    Route::middleware(['guest:admin'])->group(function () {
        Route::view('/welcome', 'welcome')->name('welcome');
        Route::view('/investor', 'back.pages.investor.investor')->name('investor');
        Route::view('/umkm', 'back.pages.interprener.interprener')->name('interprener');
        Route::view('/about', 'about')->name('about');
    });

    // Error route
    Route::middleware(['guest:admin'])->group(function () {
        Route::view('/error', 'email-templates.error')->name('error');
    });

});
