<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\HomeController;
use App\Models\ContactMessage;
use App\Models\Destination;

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
        return redirect()->route('trekking.nepal');
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
    return view('contact', [
        'destinations' => Destination::orderBy('name')->get(),
    ]);
})->name('contact');

Route::get('/mentions-legales', function () {
    return view('legal');
})->name('legal');

Route::post('/contact/send', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:255',
        'message' => 'nullable|string|max:2000',
        'destination_id' => 'nullable|exists:destinations,id',
        'persons' => 'nullable|integer|min:1|max:100',
        'gdpr' => 'accepted',
    ]);

    ContactMessage::create([
        'full_name' => $data['name'],
        'email_address' => $data['email'],
        'phone' => $data['phone'] ?? null,
        'destination_id' => $data['destination_id'] ?? null,
        'persons' => $data['persons'] ?? 1,
        'message' => $data['message'] ?? null,
    ]);

    return redirect()->route('contact')->with('success', 'Votre message a été envoyé avec succès.');
})->name('contact.send');
