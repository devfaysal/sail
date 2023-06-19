<?php

namespace App\Filament\Resources\TerritoryResource\Pages;

use App\Filament\Resources\TerritoryResource;
use App\Models\Region;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Konnco\FilamentImport\Actions\ImportAction;
use Konnco\FilamentImport\Actions\ImportField;

class ListTerritories extends ListRecords
{
    protected static string $resource = TerritoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            ImportAction::make()
                ->fields([
                    ImportField::make('region_id'),
                    ImportField::make('name'),
                    ImportField::make('field_force'),
                    ImportField::make('designation'),
                ])->mutateBeforeCreate(function ($row) {
                    $region = Region::where('name', $row['region_id'])->first();
                    $row['region_id'] = $region->id;
                    return $row;
                })
        ];
    }
}
