<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AgencyPageResource\Pages;
use App\Models\AgencyPage;
use BackedEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AgencyPageResource extends Resource
{
    protected static ?string $model = AgencyPage::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $navigationLabel = 'Celtic Agency';
    protected static ?string $pluralModelLabel = 'Celtic Agency Pages';
    protected static ?string $modelLabel = 'Celtic Agency Page';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('title')->required()->maxLength(255),
            RichEditor::make('intro_content')->label('Intro content')->columnSpanFull(),
            RichEditor::make('ethics_content')->label('Expertise and ethics content')->columnSpanFull(),
            FileUpload::make('slider_images')
                ->image()
                ->multiple()
                ->directory('agency')
                ->disk('public')
                ->columnSpanFull(),
            Toggle::make('is_active')->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable()->sortable(),
                IconColumn::make('is_active')->boolean()->label('Active'),
                TextColumn::make('updated_at')->dateTime()->sortable(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->defaultSort('updated_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAgencyPages::route('/'),
            'create' => Pages\CreateAgencyPage::route('/create'),
            'edit' => Pages\EditAgencyPage::route('/{record}/edit'),
        ];
    }
}
