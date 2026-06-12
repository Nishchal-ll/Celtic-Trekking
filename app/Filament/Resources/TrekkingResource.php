<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TrekkingResource\Pages;
use App\Models\Trek;
use BackedEnum;
use UnitEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
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

class TrekkingResource extends Resource
{
    protected static ?string $model = Trek::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-map';
     protected static UnitEnum|string|null $navigationGroup = 'Travel & Booking Management';
    protected static ?string $navigationLabel = 'Trekking';
    protected static ?string $pluralModelLabel = 'Treks';
    protected static ?string $modelLabel = 'Trek';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Select::make('destination_id')
                ->relationship('destination', 'name')
                ->searchable()
                ->preload()
                ->required()
                ->label('Destination'),
            TextInput::make('name')->required()->maxLength(255),
            TextInput::make('slug')->required()->unique(ignoreRecord: true)->maxLength(255),
            FileUpload::make('image')
                ->image()
                ->directory('treks')
                ->disk('public')
                ->label('Main image'),
            TextInput::make('duration_days')->numeric()->required()->minValue(1),
            Textarea::make('short_description')->maxLength(1000),
            Textarea::make('description')->columnSpanFull(),
            Toggle::make('is_active')->default(true),
            Repeater::make('itinerary')
                ->relationship()
                ->schema([
                    TextInput::make('day')->numeric()->required(),
                    TextInput::make('title')->required()->maxLength(255),
                    Textarea::make('description')->columnSpanFull(),
                ])
                ->columns(1)
                ->defaultItems(0)
                ->addActionLabel('Add itinerary day')
                ->orderColumn('day')
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('destination.name')->label('Destination')->sortable()->searchable(),
                TextColumn::make('duration_days')->label('Days')->sortable(),
                IconColumn::make('is_active')->boolean()->label('Active'),
            ])
            ->filters([
                SelectFilter::make('destination_id')->relationship('destination', 'name')->label('Destination'),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->defaultSort('name');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTrekkings::route('/'),
            'create' => Pages\CreateTrekking::route('/create'),
            'edit' => Pages\EditTrekking::route('/{record}/edit'),
        ];
    }
}
