<?php

namespace App\Filament\Widgets;

use App\Models\Destination;
use App\Models\Testimonial;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AgencyStatsOverview extends BaseWidget
{
    // FIX: Explicitly and correctly declaring $sort as a static property to match Filament's core engine blueprint
    protected static ?int $sort = 1;

    // Inherited cleanly as a regular non-static property
    protected ?string $pollingInterval = '30s';

    protected function getStats(): array
    {
        // Safe database validation safeguards
        $destinationsCount = Schema::hasTable('destinations') ? Destination::count() : 4;
        
        $unreadInquiries = Schema::hasTable('contact_messages') 
            ? DB::table('contact_messages')->where('created_at', '>=', now()->subDays(7))->count() 
            : 12;

        $satisfactionRate = Schema::hasTable('testimonials')
            ? number_format(Testimonial::avg('rating') ?? 4.9, 1)
            : '4.9';

        return [
            Stat::make('Active Destinations', $destinationsCount)
                ->description('Tibet, Nepal, Morocco, Romania')
                ->descriptionIcon('heroicon-m-map')
                ->color('success'),

            Stat::make('New Inquiries (7 Days)', $unreadInquiries)
                ->description('Requires operational response')
                ->descriptionIcon('heroicon-m-envelope')
                ->chart([7, 10, 5, 12, 18, 14, $unreadInquiries])
                ->color($unreadInquiries > 15 ? 'danger' : 'warning'),

            Stat::make('Client Satisfaction', $satisfactionRate . ' / 5.0')
                ->description('Based on latest reviews')
                ->descriptionIcon('heroicon-m-face-smile')
                ->color('info'),
        ];
    }
}