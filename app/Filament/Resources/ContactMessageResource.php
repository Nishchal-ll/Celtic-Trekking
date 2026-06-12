<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactMessageResource\Pages;
use App\Mail\ContactReplyMail;
use App\Models\ContactMessage;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Mail;
use UnitEnum;

class ContactMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-envelope';
     protected static UnitEnum|string|null $navigationGroup = 'Customer Interaction';
    protected static ?string $navigationLabel = 'Contact Messages';
    protected static ?string $pluralModelLabel = 'Contact Messages';
    protected static ?string $modelLabel = 'Contact Message';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('full_name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email_address')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('phone')
                    ->maxLength(50),
                Select::make('destination_id')
                    ->relationship('destination', 'name')
                    ->searchable()
                    ->preload(),
                TextInput::make('persons')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(100)
                    ->required(),
                Textarea::make('message')
                    ->maxLength(2000),
                
                Select::make('is_read')
                    ->label('Read status')
                    ->options([
                        0 => 'Unread',
                        1 => 'Read',
                    ])
                    ->required()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('full_name')->searchable()->sortable(),
                TextColumn::make('email_address')->searchable()->sortable(),
                TextColumn::make('destination.name')->label('Destination')->sortable(),
                TextColumn::make('is_read')
                    ->label('Status')
                    ->badge()
                    ->formatStateUsing(fn ($state) => $state ? 'Read' : 'Unread')
                    ->colors([
                        'danger' => false,
                        'success' => true,
                    ])
                    ->sortable(),
                TextColumn::make('persons')->sortable(),
                TextColumn::make('created_at')->label('Submitted')->dateTime()->sortable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('destination')
                    ->form([
                        Select::make('destination_id')
                            ->relationship('destination', 'name')
                            ->searchable()
                            ->preload(),
                    ])
                    ->query(fn ($query, array $data) => $query->when($data['destination_id'] ?? null, fn ($query, $destinationId) => $query->where('destination_id', $destinationId))),
            ])
            ->recordActions([
                ViewAction::make(),
                Action::make('reply')
                    ->label('Reply')
                    ->icon('heroicon-o-paper-airplane')
                    ->form([
                        RichEditor::make('email_body')
                            ->label('Compose Email Reply')
                            ->required(),
                    ])
                    ->action(function (ContactMessage $record, array $data) {
                        Mail::to($record->email_address)
                            ->queue(new ContactReplyMail($record, $data['email_body']));

                        $record->update(['is_read' => true]);
                    }),
                Action::make('toggleRead')
                    ->label(fn (ContactMessage $record): string => $record->is_read ? 'Mark unread' : 'Mark read')
                    ->action(fn (ContactMessage $record) => $record->update(['is_read' => ! $record->is_read]))
                    ->requiresConfirmation(),
                DeleteAction::make(),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getNavigationBadge(): ?string
    {
        if (! \Illuminate\Support\Facades\Schema::hasTable('contact_messages')) {
            return null;
        }

        $count = ContactMessage::where('is_read', 0)->count();

        return $count > 0 ? (string) $count : null;
    }

    public static function getNavigationBadgeColor(): string | array | null
    {
        if (! \Illuminate\Support\Facades\Schema::hasTable('contact_messages')) {
            return null;
        }

        $count = ContactMessage::where('is_read', 0)->count();

        return $count > 0 ? 'danger' : 'success';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactMessages::route('/'),
            'view' => Pages\ViewContactMessage::route('/{record}/view'),
        ];
    }
}
