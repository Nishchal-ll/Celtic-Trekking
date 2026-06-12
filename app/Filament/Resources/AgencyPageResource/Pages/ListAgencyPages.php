<?php

namespace App\Filament\Resources\AgencyPageResource\Pages;

use App\Filament\Resources\AgencyPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAgencyPages extends ListRecords
{
    protected static string $resource = AgencyPageResource::class;

    protected function getHeaderActions(): array
    {
        return [CreateAction::make()];
    }
}
