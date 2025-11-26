<?php

namespace App\Filament\Resources\SummonResource\Pages;

use App\Filament\Resources\SummonResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSummons extends ListRecords
{
    protected static string $resource = SummonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
