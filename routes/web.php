<?php

use App\Http\Controllers\SetCookieCandidateController;
use App\Http\Controllers\AddCandidateController;
use App\Http\Controllers\SetCookieVacancyController;
use App\Http\Controllers\AddVacancyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\User\SettingsController;
use App\Http\Controllers\User\UsersController;

use App\Http\Middleware\RegistrationConfirmedMiddleware;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\GuestMiddleware;
use App\Models\EmployeeCategory;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::middleware(GuestMiddleware::class)->group(function () {
    // Route::view('/registration', 'registration.index')->name('registration');
    Route::get('/registration', [RegistrationController::class, 'index'])->name('registration');
    Route::post('/registration', [RegistrationController::class, 'store'])->name('registration.store');

    Route::view('/login', 'login.index')->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');

    
});



Route::post('/logout', [LogoutController::class, 'logout'])->name('logout')->middleware(AuthMiddleware::class);

Route::middleware(AuthMiddleware::class)->group(function () {
    Route::get('/user', [UsersController::class, 'index'])->name('user');
    Route::get('/user/settings', [SettingsController::class, 'index'])->name('user.settings');

    Route::get('/addvacancy', [AddVacancyController::class, 'index'])->name('addvacancy');
    Route::post('/addvacancy', [AddVacancyController::class, 'store'])->name('addvacancy.store');

    Route::get('/addcandidate', [AddCandidateController::class, 'index'])->name('addcandidate');
    Route::post('/addcandidate', [AddCandidateController::class, 'store'])->name('addcandidate.store');

    Route::get('/setcookievacancy', [SetCookieVacancyController::class, 'index'])->name('setcookievacancy');

    Route::get('/setcookiecandidate', [SetCookieCandidateController::class, 'index'])->name('setcookiecandidate');
});
