<?php

namespace App\Filament\Widgets;

use App\Models\ContactMessage;
use Filament\Widgets\TableWidget;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Schema;

class RecentContactMessages extends TableWidget
{
    protected static ?int $sort = 3;

    protected static ?string $heading = 'Recent Activity Feed';

    protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        if (! Schema::hasTable('contact_messages')) {
            return ContactMessage::query()->whereRaw('0 = 1');
        }

        return ContactMessage::query()
            ->latest('created_at')
            ->limit(5);
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('full_name')->label('Name')->sortable(),
            TextColumn::make('email_address')->label('Email')->sortable(),
            TextColumn::make('created_at')->label('Submitted')->dateTime()->sortable(),
        ];
    }
}
