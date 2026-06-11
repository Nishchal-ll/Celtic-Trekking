<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SlideResource\Pages;
use App\Models\Slide;
use BackedEnum;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;

class SlideResource extends Resource
{
    protected static ?string $model = Slide::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-photograph';
    protected static ?string $navigationLabel = 'Hero Slides';
    protected static ?string $pluralModelLabel = 'Hero Slides';
    protected static ?string $modelLabel = 'Hero Slide';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Textarea::make('subtitle')
                    ->maxLength(1000),
                TextInput::make('image')
                    ->required()
                    ->maxLength(255)
                    ->label('Image path'),
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
                TextColumn::make('link')->url()->limit(50),
                TextColumn::make('is_active')->boolean(),
                TextColumn::make('order')->sortable(),
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
