<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TrekBookingsChart extends ChartWidget
{
    // Heading title matching chart parent instance
    protected ?string $heading = 'Monthly Trek Inquiries & Bookings Trend';
    
    // FIX: Set the exact strict native string type hint required by your Filament version
    protected string $color = 'info';
    
    // Static dashboard positioning index
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $inquiryData = [15, 22, 45, 68, 30, 12, 18, 55, 92, 84, 40, 20];
        $confirmedBookings = [5, 8, 20, 34, 12, 4, 6, 25, 54, 48, 15, 8];

        if (Schema::hasTable('contact_messages')) {
            $inquiriesByMonth = DB::table('contact_messages')
                ->select(DB::raw('EXTRACT(MONTH FROM created_at) as month'), DB::raw('count(*) as total'))
                ->whereYear('created_at', date('Y'))
                ->groupBy('month')
                ->pluck('total', 'month')
                ->toArray();

            if (!empty($inquiriesByMonth)) {
                $inquiryData = [];
                for ($i = 1; $i <= 12; $i++) {
                    $inquiryData[] = $inquiriesByMonth[$i] ?? 0;
                }
            }
        }

        return [
            'datasets' => [
                [
                    'label' => 'Total Inquiries Received',
                    'data' => $inquiryData,
                    'borderColor' => '#3a6fd8',
                    'backgroundColor' => 'rgba(58, 111, 216, 0.1)',
                    'fill' => true,
                    'tension' => 0.3,
                ],
                [
                    'label' => 'Confirmed Bookings (Fixed Departures)',
                    'data' => $confirmedBookings,
                    'borderColor' => '#fbbf24',
                    'backgroundColor' => 'transparent',
                    'borderDash' => [5, 5],
                    'tension' => 0.1,
                ],
            ],
            'labels' => $months,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}