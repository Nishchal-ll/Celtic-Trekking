<?php

namespace App\Filament\Resources\FixedDepartureResource\Pages;

use App\Filament\Resources\FixedDepartureResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFixedDepartures extends ListRecords
{
    protected static string $resource = FixedDepartureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
