<?php

namespace App\Http\Controllers;

use App\Models\AgencyPage;
use App\Models\Testimonial;
use Illuminate\View\View;

class AgencyController extends Controller
{
    public function index(): View
    {
        $agencyPage = AgencyPage::where('is_active', true)
            ->latest()
            ->first();

        $testimonials = Testimonial::where('is_approved', true)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('agency', compact('agencyPage', 'testimonials'));
    }
}
