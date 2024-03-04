<?php

namespace App\Filament\Resources\CompletedjobResource\Pages;

use App\Filament\Resources\CompletedjobResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompletedjobs extends ListRecords
{
    protected static string $resource = CompletedjobResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
