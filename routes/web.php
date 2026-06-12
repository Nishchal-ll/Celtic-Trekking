<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrekkingController;
use App\Models\ContactMessage;
use App\Models\Destination;
use App\Models\TermsCondition;
use App\Models\Testimonial;

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

    Route::get('/nepal', [TrekkingController::class, 'show'])->defaults('destination', 'nepal')->name('nepal');
    Route::get('/{destination}', [TrekkingController::class, 'show'])->name('show');
});

// Fixed Departures
Route::get('/fixed-departures', function () {
    try {
        $fixedDepartureDestinations = Destination::query()
            ->whereHas('fixedDepartureTreks.departures')
            ->with(['fixedDepartureTreks.departures' => function ($query) {
                $query->orderBy('departure_date');
            }])
            ->orderBy('order')
            ->orderBy('name')
            ->get();

        $testimonials = Testimonial::where('is_approved', true)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();
    } catch (\Throwable) {
        $fixedDepartureDestinations = collect();
        $testimonials = collect();
    }

    return view('fixed-departures', compact('fixedDepartureDestinations', 'testimonials'));
})->name('fixed-departures');

Route::redirect('/departs-fixes', '/fixed-departures', 301);

// Agency
Route::get('/agency', [App\Http\Controllers\AgencyController::class, 'index'])
    ->name('agency');

Route::redirect('/agence-celtic', '/agency', 301);

// Testimonials
Route::get('/testimonials', [App\Http\Controllers\TestimonialController::class, 'index'])
    ->name('testimony');

Route::redirect('/temoignage', '/testimonials', 301);

// Contact
Route::get('/contact', function () {
    return view('contact', [
        'destinations' => Destination::orderBy('name')->get(),
    ]);
})->name('contact');

Route::get('/legal-notice', function () {
    return view('legal');
})->name('legal');

Route::get('/terms-and-conditions', function () {
    $terms = TermsCondition::latest()->first();

    return view('terms', compact('terms'));
})->name('terms');

Route::redirect('/terms', '/terms-and-conditions', 301);
Route::redirect('/mentions-legales', '/legal-notice', 301);

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

    return redirect()->route('contact')->with('success', 'Your Message has been sent Successfully.');
})->name('contact.send');
