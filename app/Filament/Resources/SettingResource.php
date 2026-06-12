<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Models\Setting;
use BackedEnum;
use UnitEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group; // Correct namespace for layouts in newer versions
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-cog';
    protected static UnitEnum|string|null $navigationGroup = 'Website Configuration';
    protected static ?string $navigationLabel = 'Site Settings';
    protected static ?string $pluralModelLabel = 'Site Settings';
    protected static ?string $modelLabel = 'Setting';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('key')
                    ->required()
                    ->live() // Dynamically triggers schema updates on value alterations
                    ->disabledOn('edit') // Stops accidental alteration of system configuration keys
                    ->maxLength(255),

                // Group acts as a structural layout element to handle conditional schema switching safely
                Group::make()
                    ->components(function (callable $get, ?Setting $record) {
                        $currentKey = $record?->key ?? $get('key');

                        if ($currentKey === 'logo') {
                            return [
                                FileUpload::make('value')
                                    ->label('Value')
                                    ->disk('public')
                                    ->directory('logo')
                                    ->image()
                                    ->imagePreviewHeight('125')
                                    ->helperText('Upload a logo image only when key is "logo".'),
                            ];
                        }

                        return [
                            Textarea::make('value')
                                ->label('Value')
                                ->rows(4)
                                ->placeholder('Enter text, URL link, or paste iframe embed elements here...')
                                ->helperText('For other settings, use the plain text setting editor.'),
                        ];
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('key')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                
                TextColumn::make('value')
                    ->label('Value')
                    ->searchable()
                    ->wrap() // Allows long configuration text strings to wrap to a new line
                    ->formatStateUsing(function (string $state, Setting $record) {
                        // If it contains an iframe map script, summarize it elegantly instead of breaking row heights
                        if (Str::contains($state, '<iframe')) {
                            return '🗺️ Google Maps Embed Script Code';
                        }
                        
                        // Limit display depth for clean data scanning inside the dashboard grid view
                        return Str::limit($state, 60);
                    }),
                    
                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->defaultSort('key', 'asc'); // Sorted alphabetically by setting keys for intuitive administration
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }

    public static function getNavigationUrl(): string
    {
        return static::getUrl('index');
    }
}