<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SlideResource\Pages;
use App\Models\Slide;
use BackedEnum;
use UnitEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;

class SlideResource extends Resource
{
    protected static ?string $model = Slide::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-envelope';
      protected static UnitEnum|string|null $navigationGroup = 'Website Configuration';
    protected static ?string $navigationLabel = 'Hero Slides';
    protected static ?string $pluralModelLabel = 'Hero Slides';
    protected static ?string $modelLabel = 'Hero Slide';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Textarea::make('subtitle')
                    ->maxLength(1000),
                FileUpload::make('image')
                    ->image()
                    ->directory('slides')
                    ->disk('public')
                    ->required()
                    ->label('Slide image'),
                TextInput::make('link')
                    ->url()
                    ->maxLength(255),
                TextInput::make('button_text')
                    ->maxLength(255),
                Toggle::make('is_active')
                    ->label('Is active')
                    ->default(true),
                TextInput::make('order')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('subtitle')->limit(50),
                TextColumn::make('link')
                    ->url(fn (Slide $record): ?string => $record->link)
                    ->limit(50),
                IconColumn::make('is_active')->boolean(),
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
            'index' => Pages\ListSlides::route('/'),
            'create' => Pages\CreateSlide::route('/create'),
            'edit' => Pages\EditSlide::route('/{record}/edit'),
        ];
    }
}
