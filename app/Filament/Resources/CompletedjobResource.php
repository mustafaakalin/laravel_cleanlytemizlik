<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\Completedjob;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TimePicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CompletedjobResource\Pages;
use App\Filament\Resources\CompletedjobResource\RelationManagers;

class CompletedjobResource extends Resource
{
    protected static ?string $model = Completedjob::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationLabel = 'Completed Jobs';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                ->image()
                ->required()
                ->multiple(),
                TextInput::make('namesurname')
                ->maxLength(255)
                ->live($debounce = 500)
                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                ->label('Name Surname')
                ->required(),
                TextInput::make('slug')
                ->maxLength(255)
                ->required(),
                Textarea::make('description')
                ->maxLength(2000)
                ->required(),
                Select::make('jobtotaltime')
                ->required()
                ->options([
                    '1 hour' => '1 hour',
                    '2 hours' => '2 hours',
                    '3 hours' => '3 hours',
                    '4 hours' => '4 hours',
                    '5 hours' => '5 hours',
                    '6 hours' => '6 hours',
                    '7 hours' => '7 hours',
                    '8 hours' => '8 hours',
                    '9 hours' => '9 hours',
                    '10 hours' => '10 hours',
                    '11 hours' => '11 hours',
                    '12 hours' => '12 hours',
                    '13 hours' => '13 hours',
                    '14 hours' => '14 hours',
                    '15 hours' => '15 hours',
                    '16 hours' => '16 hours',
                    '17 hours' => '17 hours',
                    '18 hours' => '18 hours',
                    '19 hours' => '19 hours',
                    '20 hours' => '20 hours',
                    '21 hours' => '21 hours',
                    '22 hours' => '22 hours',
                    '23 hours' => '23 hours',
                    '24 hours' => '24 hours',
                ])
                ->label('Job Total Time'),
                TextInput::make('jobtype'),
                TextInput::make('joblocation'),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('namesurname')
                ->searchable(),
                TextColumn::make('description')
                ->limit(50)
                ->searchable(),
                TextColumn::make('jobtotaltime')
                ->searchable(),
                TextColumn::make('jobtype')
                ->searchable(),
                TextColumn::make('joblocation')
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
            'index' => Pages\ListCompletedjobs::route('/'),
            'create' => Pages\CreateCompletedjob::route('/create'),
            'edit' => Pages\EditCompletedjob::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
