<?php

namespace App\Filament\Resources\TerritoryResource\Pages;

use App\Filament\Resources\TerritoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTerritory extends EditRecord
{
    protected static string $resource = TerritoryResource::class;

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
