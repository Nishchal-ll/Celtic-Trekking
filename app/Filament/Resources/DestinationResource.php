<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DestinationResource\Pages;
use App\Models\Destination;
use BackedEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;

class DestinationResource extends Resource
{
    protected static ?string $model = Destination::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-map';
    protected static ?string $navigationLabel = 'Destinations';
    protected static ?string $pluralModelLabel = 'Destinations';
    protected static ?string $modelLabel = 'Destination';

    public static function form(Schema $schema): Schema
    {
        return $schema
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
                FileUpload::make('image')
                    ->image()
                    ->directory('destinations')
                    ->disk('public')
                    ->required()
                    ->label('Destination image'),
                FileUpload::make('banner_image')
                    ->image()
                    ->directory('destinations/banners')
                    ->disk('public')
                    ->label('Banner image'),
                TextInput::make('hero_title')
                    ->maxLength(255)
                    ->label('Trekking page hero title'),
                TextInput::make('hero_subtitle')
                    ->maxLength(255)
                    ->label('Trekking page hero subtitle'),
                TextInput::make('intro_title')
                    ->maxLength(255)
                    ->label('Intro title'),
                RichEditor::make('intro_content')
                    ->label('Intro content')
                    ->columnSpanFull(),
                FileUpload::make('intro_gallery')
                    ->image()
                    ->multiple()
                    ->directory('destinations/intro-gallery')
                    ->disk('public')
                    ->label('Intro gallery'),
                TextInput::make('info_title')
                    ->maxLength(255)
                    ->label('Info strip title'),
                RichEditor::make('info_content')
                    ->label('Info strip content')
                    ->columnSpanFull(),
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
                IconColumn::make('is_featured')->boolean()->label('Featured'),
                TextColumn::make('order')->sortable(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
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
