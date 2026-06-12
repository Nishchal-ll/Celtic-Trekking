<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TrekkingResource\Pages;
use App\Models\Trek;
use BackedEnum;
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
            FileUpload::make('gallery')
                ->image()
                ->multiple()
                ->directory('treks/gallery')
                ->disk('public'),
            TextInput::make('duration_days')->numeric()->required()->minValue(1),
            Select::make('difficulty')
                ->options([
                    1 => 'Easy',
                    2 => 'Moderate',
                    3 => 'Challenging',
                    4 => 'Difficult',
                    5 => 'Extreme',
                ])
                ->default(2)
                ->required(),
            TextInput::make('max_altitude')->numeric()->label('Max altitude'),
            TextInput::make('best_season')->maxLength(255),
            TextInput::make('group_size_min')->numeric()->default(2),
            TextInput::make('group_size_max')->numeric()->default(12),
            TextInput::make('price')->numeric()->default(0)->required(),
            Textarea::make('short_description')->maxLength(1000),
            Textarea::make('description')->columnSpanFull(),
            Toggle::make('is_active')->default(true),
            Repeater::make('itinerary')
                ->relationship()
                ->schema([
                    TextInput::make('day')->numeric()->required(),
                    TextInput::make('title')->required()->maxLength(255),
                    Textarea::make('description')->columnSpanFull(),
                    TextInput::make('walking_time')->maxLength(255),
                    TextInput::make('altitude')->numeric(),
                    TextInput::make('accommodation')->maxLength(255),
                    TextInput::make('meals')->maxLength(255),
                ])
                ->columns(2)
                ->defaultItems(0)
                ->addActionLabel('Add itinerary day')
                ->orderColumn('day')
                ->columnSpanFull(),
            TextInput::make('meta_title')->maxLength(255),
            Textarea::make('meta_description'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('destination.name')->label('Destination')->sortable()->searchable(),
                TextColumn::make('duration_days')->label('Days')->sortable(),
                TextColumn::make('price')->money('eur')->sortable(),
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
