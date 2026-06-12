<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TermsConditionResource\Pages;
use App\Models\TermsCondition;
use BackedEnum;
use UnitEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TermsConditionResource extends Resource
{
    protected static ?string $model = TermsCondition::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-document-text';
      protected static UnitEnum|string|null $navigationGroup = 'Website Configuration';
    protected static ?string $navigationLabel = 'Terms & Conditions';
    protected static ?string $pluralModelLabel = 'Terms & Conditions';
    protected static ?string $modelLabel = 'Terms & Conditions';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                RichEditor::make('rates')
                    ->label('Rates')
                    ->required()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'blockquote',
                        'link',
                        'orderedList',
                        'bulletList',
                        'code',
                        'redo',
                        'undo',
                    ])
                    ->placeholder('Add the Rates section content here...'),
                RichEditor::make('bookings')
                    ->label('Bookings')
                    ->required()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'blockquote',
                        'link',
                        'orderedList',
                        'bulletList',
                        'code',
                        'redo',
                        'undo',
                    ])
                    ->placeholder('Add the Bookings section content here...'),
                RichEditor::make('insurance')
                    ->label('Insurance')
                    ->required()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'blockquote',
                        'link',
                        'orderedList',
                        'bulletList',
                        'code',
                        'redo',
                        'undo',
                    ])
                    ->placeholder('Add the Insurance section content here...'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->dateTime('M d, Y H:i')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('M d, Y H:i')
                    ->sortable(),
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
            'index' => Pages\ListTermsConditions::route('/'),
            'create' => Pages\CreateTermsCondition::route('/create'),
            'edit' => Pages\EditTermsCondition::route('/{record}/edit'),
        ];
    }
}
