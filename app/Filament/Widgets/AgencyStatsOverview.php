<?php

namespace App\Filament\Widgets;

use App\Models\ContactMessage;
use App\Models\Destination;
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
        $unreadMessages = Schema::hasTable('contact_messages')
            ? ContactMessage::where('is_read', false)->count()
            : 0;

        $inquiriesThisMonth = Schema::hasTable('contact_messages')
            ? ContactMessage::whereYear('created_at', now()->year)
                ->whereMonth('created_at', now()->month)
                ->count()
            : 0;

        $mostPopularDestination = 'No destination data yet';

        if (Schema::hasTable('contact_messages') && Schema::hasTable('destinations')) {
            $popular = DB::table('contact_messages')
                ->select('destination_id', DB::raw('count(*) as total'))
                ->whereNotNull('destination_id')
                ->groupBy('destination_id')
                ->orderByDesc('total')
                ->first();

            if ($popular && $popular->destination_id) {
                $destination = Destination::find($popular->destination_id);
                $mostPopularDestination = $destination ? $destination->name : 'Unknown destination';
            }
        }

        return [
            Stat::make('Total Unread Messages', $unreadMessages)
                ->description('Messages waiting for reply')
                ->descriptionIcon('heroicon-m-envelope-open')
                ->color($unreadMessages > 0 ? 'danger' : 'success'),

            Stat::make('Most Popular Destination', $mostPopularDestination)
                ->description('Highest inquiry interest')
                ->descriptionIcon('heroicon-m-map')
                ->color('primary'),

            Stat::make('Inquiries This Month', $inquiriesThisMonth)
                ->description('Customer contacts recorded this month')
                ->descriptionIcon('heroicon-m-calendar')
                ->color('warning'),
        ];
    }
}