<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use BackedEnum;
use UnitEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\CreateAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-chat-bubble-oval-left';
     protected static UnitEnum|string|null $navigationGroup = 'Customer Interaction';
    protected static ?string $navigationLabel = 'Testimonials';
    protected static ?string $pluralModelLabel = 'Testimonials';
    protected static ?string $modelLabel = 'Testimonial';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Select::make('trek_id')
                    ->relationship('trek', 'name')
                    ->searchable()
                    ->preload()
                    ->label('Trek'),
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                TextInput::make('location')
                    ->maxLength(255),
                FileUpload::make('avatar')
                    ->image()
                    ->directory('testimonials')
                    ->disk('public')
                    ->label('Avatar'),
                Textarea::make('content')
                    ->required()
                    ->maxLength(2000),
                TextInput::make('rating')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(5)
                    ->default(5)
                    ->required(),
                DatePicker::make('trek_date')
                    ->label('Trek date'),
                Toggle::make('is_approved')
                    ->label('Approved')
                    ->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('trek.name')->label('Trek')->sortable(),
                TextColumn::make('location')->sortable(),
                TextColumn::make('rating')->sortable(),
                IconColumn::make('is_approved')->boolean()->label('Approved'),
                TextColumn::make('created_at')->label('Submitted')->dateTime()->sortable(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
