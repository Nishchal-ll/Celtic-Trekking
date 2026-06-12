<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Slide;
use App\Models\Testimonial;
use Illuminate\View\View;
use Throwable;

class HomeController extends Controller
{
    /**
     * Show the landing page.
     */
    public function index(): View
    {
        try {
            $slides = Slide::where('is_active', true)
                ->orderBy('order')
                ->get();

            $testimonials = Testimonial::where('is_approved', true)
                ->orderBy('created_at', 'desc')
                ->take(3)
                ->get();

            $destinations = Destination::where('is_featured', true)
                ->orderBy('order')
                ->get()
                ->map(function (Destination $destination) {
                    $routeMap = [
                        'nepal' => route('trekking.nepal'),
                        'tibet' => route('trekking.tibet'),
                        'maroc' => route('trekking.maroc'),
                        'roumanie' => route('trekking.roumanie'),
                    ];

                    $destination->link = $routeMap[$destination->slug] ?? route('trekking.index');

                    return $destination;
                });
        } catch (Throwable) {
            $slides = collect();
            $destinations = collect();
            $testimonials = collect();
        }

        return view('home', compact('slides', 'destinations', 'testimonials'));
    }
}
