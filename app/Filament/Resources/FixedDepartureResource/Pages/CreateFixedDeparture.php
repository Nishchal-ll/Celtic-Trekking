<?php

namespace App\Filament\Resources\FixedDepartureResource\Pages;

use App\Filament\Resources\FixedDepartureResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFixedDeparture extends CreateRecord
{
    protected static string $resource = FixedDepartureResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['is_fixed_departure'] = true;

        return $data;
    }
}
