<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\HomeController;

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

// Home / Landing Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Trekking Routes
Route::prefix('trekking')->name('trekking.')->group(function () {
    Route::get('/', function () {
        return view('trekking.index');
    })->name('index');

    Route::get('/nepal', function () {
        return view('trekking.nepal');
    })->name('nepal');

    Route::get('/tibet', function () {
        return view('trekking.tibet');
    })->name('tibet');

    Route::get('/maroc', function () {
        return view('trekking.maroc');
    })->name('maroc');

    Route::get('/roumanie', function () {
        return view('trekking.roumanie');
    })->name('roumanie');
});

// Fixed Departures
Route::get('/departs-fixes', function () {
    return view('fixed-departures');
})->name('fixed-departures');

// Agency
Route::get('/agence-celtic', function () {
    return view('agency');
})->name('agency');

// Testimonials
Route::get('/temoignage', function () {
    return view('testimony');
})->name('testimony');

// Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::redirect('/admin', '/admin/login');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    });

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});
