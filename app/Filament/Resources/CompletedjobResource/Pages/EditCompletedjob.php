<?php

namespace App\Filament\Resources\CompletedjobResource\Pages;

use App\Filament\Resources\CompletedjobResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompletedjob extends EditRecord
{
    protected static string $resource = CompletedjobResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
