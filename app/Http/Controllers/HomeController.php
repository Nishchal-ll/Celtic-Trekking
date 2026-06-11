<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Slide;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the landing page.
     */
    public function index(): View
    {
        $slides = Slide::where('is_active', true)
            ->orderBy('order')
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

        return view('home', compact('slides', 'destinations'));
    }
}
