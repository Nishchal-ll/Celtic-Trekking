<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FixedDepartureResource\Pages;
use App\Models\Trek;
use BackedEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class FixedDepartureResource extends Resource
{
    protected static ?string $model = Trek::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationLabel = 'Fixed Departures';
    protected static ?string $pluralModelLabel = 'Fixed Departures';
    protected static ?string $modelLabel = 'Fixed Departure Tour';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where('is_fixed_departure', true)
            ->with(['destination', 'departures']);
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Select::make('destination_id')
                    ->relationship('destination', 'name')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->label('Destination'),
                TextInput::make('name')
                    ->label('Available tour')
                    ->required()
                    ->maxLength(255),
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
                TextInput::make('duration_days')
                    ->numeric()
                    ->required()
                    ->minValue(1)
                    ->label('Duration days'),
                TextInput::make('fixed_departure_badge')
                    ->maxLength(255)
                    ->label('Tour badge')
                    ->placeholder('in lodge, homestay + tented camp, New'),
                TextInput::make('fixed_departure_order')
                    ->numeric()
                    ->default(0)
                    ->label('Display order'),
                TextInput::make('price')
                    ->numeric()
                    ->default(0)
                    ->required(),
                Textarea::make('short_description')
                    ->maxLength(1000),
                Toggle::make('is_active')
                    ->default(true),
                Toggle::make('is_fixed_departure')
                    ->default(true)
                    ->disabled()
                    ->dehydrated(),
                Repeater::make('departures')
                    ->relationship()
                    ->label('Departure dates')
                    ->schema([
                        DatePicker::make('departure_date')
                            ->required()
                            ->label('Departure date'),
                        DatePicker::make('return_date')
                            ->required()
                            ->label('Return date'),
                        Select::make('status')
                            ->options([
                                'open' => 'Open',
                                'confirmed' => 'Confirmed',
                                'full' => 'Full',
                                'cancelled' => 'Cancelled',
                            ])
                            ->default('open')
                            ->required(),
                        TextInput::make('spots_total')
                            ->numeric()
                            ->default(12)
                            ->required(),
                        TextInput::make('spots_available')
                            ->numeric()
                            ->default(12)
                            ->required(),
                        TextInput::make('price')
                            ->numeric()
                            ->default(0)
                            ->required(),
                        Textarea::make('notes')
                            ->maxLength(1000),
                    ])
                    ->columns(3)
                    ->defaultItems(1)
                    ->addActionLabel('Add departure date')
                    ->reorderable(false)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('destination.name')
                    ->label('Destination')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('name')
                    ->label('Tour')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('duration_days')
                    ->label('Days')
                    ->sortable(),
                TextColumn::make('departures_count')
                    ->counts('departures')
                    ->label('Dates')
                    ->sortable(),
                IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
                TextColumn::make('fixed_departure_order')
                    ->label('Order')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('destination_id')
                    ->relationship('destination', 'name')
                    ->label('Destination'),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->defaultSort('fixed_departure_order');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFixedDepartures::route('/'),
            'create' => Pages\CreateFixedDeparture::route('/create'),
            'edit' => Pages\EditFixedDeparture::route('/{record}/edit'),
        ];
    }
}
