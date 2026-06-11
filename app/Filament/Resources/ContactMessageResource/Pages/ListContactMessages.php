<?php

namespace App\Filament\Resources\ContactMessageResource\Pages;

use App\Filament\Resources\ContactMessageResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables;

class ListContactMessages extends ListRecords
{
    protected static string $resource = ContactMessageResource::class;

    protected function getActions(): array
    {
        return [
            Tables\Actions\ViewAction::make(),
            Tables\Actions\DeleteAction::make(),
        ];
    }

    protected function getHeaderActions(): array
    {
        return [];
    }
}
