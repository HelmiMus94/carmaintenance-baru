<?php

namespace App\Filament\Resources\SummonResource\Pages;

use App\Filament\Resources\SummonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSummon extends EditRecord
{
    protected static string $resource = SummonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
