<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DestinationResource\Pages;
use App\Models\Destination;
use BackedEnum;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;

class DestinationResource extends Resource
{
    protected static ?string $model = Destination::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-map';
    protected static ?string $navigationLabel = 'Destinations';
    protected static ?string $pluralModelLabel = 'Destinations';
    protected static ?string $modelLabel = 'Destination';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                TextInput::make('country')
                    ->required()
                    ->maxLength(255),
                TextInput::make('continent')
                    ->required()
                    ->maxLength(255),
                TextInput::make('image')
                    ->required()
                    ->maxLength(255)
                    ->label('Image path'),
                TextInput::make('banner_image')
                    ->maxLength(255)
                    ->label('Banner image path'),
                Toggle::make('is_featured')
                    ->label('Featured destination')
                    ->default(false),
                TextInput::make('order')
                    ->numeric()
                    ->default(0),
                TextInput::make('meta_title')
                    ->maxLength(255),
                Textarea::make('short_description'),
                Textarea::make('description'),
                Textarea::make('meta_description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('country')->sortable(),
                TextColumn::make('continent')->sortable(),
                TextColumn::make('is_featured')->boolean()->label('Featured'),
                TextColumn::make('order')->sortable(),
            ])
            ->defaultSort('order');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDestinations::route('/'),
            'create' => Pages\CreateDestination::route('/create'),
            'edit' => Pages\EditDestination::route('/{record}/edit'),
        ];
    }
}
