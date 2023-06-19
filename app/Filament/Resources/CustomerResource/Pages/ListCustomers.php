<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use App\Models\Territory;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Konnco\FilamentImport\Actions\ImportAction;
use Konnco\FilamentImport\Actions\ImportField;

class ListCustomers extends ListRecords
{
    protected static string $resource = CustomerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            ImportAction::make()
                ->fields([
                    ImportField::make('territory_id'),
                    ImportField::make('name'),
                    ImportField::make('code'),
                    ImportField::make('address'),
                    ImportField::make('proprietor'),
                    ImportField::make('mobile'),
                    ImportField::make('credit_limit'),
                ])->mutateBeforeCreate(function ($row) {
                    $territory = Territory::where('name', $row['territory_id'])->first();
                    $row['territory_id'] = $territory->id;
                    return $row;
                })
        ];
    }
}
