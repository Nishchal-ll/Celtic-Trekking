<?php

namespace App\Filament\Resources\FixedDepartureResource\Pages;

use App\Filament\Resources\FixedDepartureResource;
use Filament\Resources\Pages\EditRecord;

class EditFixedDeparture extends EditRecord
{
    protected static string $resource = FixedDepartureResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['is_fixed_departure'] = true;

        return $data;
    }
}
