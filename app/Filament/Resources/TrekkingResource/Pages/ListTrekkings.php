<?php

namespace App\Filament\Resources\TrekkingResource\Pages;

use App\Filament\Resources\TrekkingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTrekkings extends ListRecords
{
    protected static string $resource = TrekkingResource::class;

    protected function getHeaderActions(): array
    {
        return [CreateAction::make()];
    }
}
