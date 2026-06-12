<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class DestinationDistributionChart extends ChartWidget
{
    // FIX 1: Removed 'static' from $heading to match Filament's parent structure
    protected ?string $heading = 'Trek Requests by Destination Country';

    // FIX 2: Kept 'static' on $sort because Widget::$sort IS static internally
    protected static ?int $sort = 3;

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Requests Share',
                    'data' => [45, 25, 20, 10], // Nepal, Tibet, Morocco, Romania
                    'backgroundColor' => [
                        '#1d3d8c', // Deep Blue (Nepal)
                        '#fbbf24', // Gold (Tibet)
                        '#059669', // Emerald Green (Morocco)
                        '#991b1b', // Deep Crimson (Romania)
                    ],
                ],
            ],
            'labels' => ['Nepal', 'Tibet', 'Morocco', 'Romania'],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}