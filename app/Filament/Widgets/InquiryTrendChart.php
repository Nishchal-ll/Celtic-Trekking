<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class InquiryTrendChart extends ChartWidget
{
    protected static ?int $sort = 2;

    protected ?string $heading = 'Monthly Customer Inquiries';

    protected function getData(): array
    {
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $counts = array_fill(0, 12, 0);

        if (Schema::hasTable('contact_messages')) {
            $monthly = DB::table('contact_messages')
                ->selectRaw('MONTH(created_at) as month, count(*) as total')
                ->whereYear('created_at', now()->year)
                ->groupBy('month')
                ->orderBy('month')
                ->pluck('total', 'month')
                ->toArray();

            foreach ($monthly as $month => $total) {
                $counts[$month - 1] = $total;
            }
        }

        return [
            'datasets' => [
                [
                    'label' => 'Customer Inquiries',
                    'data' => $counts,
                    'borderColor' => '#0ea5e9',
                    'backgroundColor' => 'rgba(14, 165, 233, 0.2)',
                    'fill' => true,
                    'tension' => 0.4,
                    'pointRadius' => 4,
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
