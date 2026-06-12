<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\View\View;

class TrekkingController extends Controller
{
    public function show(string $destination): View
    {
        $destination = Destination::where('slug', $destination)
            ->with(['treks' => function ($query) {
                $query->where('is_active', true)
                    ->with(['itinerary' => function ($query) {
                        $query->orderBy('day');
                    }])
                    ->orderBy('name');
            }])
            ->firstOrFail();

        return view('trekking.show', compact('destination'));
    }
}
