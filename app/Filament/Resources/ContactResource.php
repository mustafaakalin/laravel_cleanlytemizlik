<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Contact;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ContactResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ContactResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-phone';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->maxLength(255)
                ->required(),
                TextInput::make('lastname')
                ->maxLength(255)
                ->required(),
                    TextInput::make('company')
                    ->maxLength(255)
                    ->nullable(),
                    TextInput::make('email')
                    ->email()
                    ->maxLength(255)
                    ->nullable(),
                    TextInput::make('country')
                    ->maxLength(255)
                    ->nullable(),
                    TextInput::make('phone')
                    ->maxLength(255)
                    ->tel()
                    ->required(),
                    Textarea::make('message')
                    ->maxLength(2000)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->searchable(),
                TextColumn::make('lastname')
                ->searchable(),
                TextColumn::make('company')
                ->toggleable(isToggledHiddenByDefault:true)
                ->searchable(),
                TextColumn::make('email')
                ->toggleable(isToggledHiddenByDefault:true)
                ->searchable(),
                TextColumn::make('country')
                ->toggleable(isToggledHiddenByDefault:true)
                ->searchable(),
                TextColumn::make('phone')
                ->searchable(),
                TextColumn::make('message')
                ->limit(50)
                // tooltip with autowrap
                ->tooltip(fn (Contact $record): string => $record->message)
                ->toggleable(isToggledHiddenByDefault:true)
                ->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
