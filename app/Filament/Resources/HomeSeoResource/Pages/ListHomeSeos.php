<?php

namespace App\Filament\Resources\HomeSeoResource\Pages;

use App\Filament\Resources\HomeSeoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeSeos extends ListRecords
{
    protected static string $resource = HomeSeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
