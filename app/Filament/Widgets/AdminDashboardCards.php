<?php

namespace App\Filament\Widgets;

use App\Models\Destination;
use App\Models\Departure;
use App\Models\Itinerary;
use App\Models\Slide;
use App\Models\Testimonial;
use App\Models\Trek;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AdminDashboardCards extends BaseWidget
{
    protected static ?int $sort = 2;

    protected function getStats(): array
    {
        $destinationCount = Schema::hasTable('destinations') ? Destination::count() : 0;
        $trekCount = Schema::hasTable('treks') ? Trek::count() : 0;
        $departureCount = Schema::hasTable('departures') ? Departure::count() : 0;
        $testimonialCount = Schema::hasTable('testimonials') ? Testimonial::count() : 0;
        $slideCount = Schema::hasTable('slides') ? Slide::count() : 0;
        $itineraryCount = Schema::hasTable('itineraries') ? Itinerary::count() : 0;

        $unreadInquiries = Schema::hasTable('contact_messages')
            ? DB::table('contact_messages')->where('created_at', '>=', now()->subDays(7))->count()
            : 0;

        $websiteSettings = Schema::hasTable('settings') ? DB::table('settings')->count() : 0;

        return [
            Stat::make('Destination Pages', $destinationCount)
                ->description('Check availability and page completeness')
                ->descriptionIcon('heroicon-m-map')
                ->color('success'),

            Stat::make('Published Treks', $trekCount)
                ->description('Update descriptions and pricing regularly')
                ->descriptionIcon('heroicon-m-flag')
                ->color('primary'),

            Stat::make('Recent Inquiries', $unreadInquiries)
                ->description('Respond quickly to improve conversions')
                ->descriptionIcon('heroicon-m-envelope-open')
                ->color($unreadInquiries > 10 ? 'danger' : 'secondary'),
        ];
    }
}
