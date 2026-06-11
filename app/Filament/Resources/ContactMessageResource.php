<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactMessageResource\Pages;
use App\Models\ContactMessage;
use BackedEnum;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class ContactMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-mail';
    protected static ?string $navigationLabel = 'Contact Messages';
    protected static ?string $pluralModelLabel = 'Contact Messages';
    protected static ?string $modelLabel = 'Contact Message';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('full_name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email_address')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('phone')
                    ->maxLength(50),
                Select::make('destination_id')
                    ->relationship('destination', 'name')
                    ->searchable()
                    ->preload(),
                TextInput::make('persons')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(100)
                    ->required(),
                Textarea::make('message')
                    ->maxLength(2000),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('full_name')->searchable()->sortable(),
                TextColumn::make('email_address')->searchable()->sortable(),
                TextColumn::make('destination.name')->label('Destination')->sortable(),
                TextColumn::make('persons')->sortable(),
                TextColumn::make('created_at')->label('Submitted')->dateTime()->sortable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('destination')
                    ->form([
                        Select::make('destination_id')
                            ->relationship('destination', 'name')
                            ->searchable()
                            ->preload(),
                    ])
                    ->query(fn ($query, array $data) => $query->when($data['destination_id'], fn ($query, $destinationId) => $query->where('destination_id', $destinationId))),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactMessages::route('/'),
            'view' => Pages\ViewContactMessage::route('/{record}/view'),
        ];
    }
}
