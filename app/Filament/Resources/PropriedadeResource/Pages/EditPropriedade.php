<?php

namespace App\Filament\Resources\PropriedadeResource\Pages;

use App\Filament\Resources\PropriedadeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPropriedade extends EditRecord
{
    protected static string $resource = PropriedadeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
