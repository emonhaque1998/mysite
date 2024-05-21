<?php

namespace App\Filament\Resources\AboutSeoResource\Pages;

use App\Filament\Resources\AboutSeoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutSeos extends ListRecords
{
    protected static string $resource = AboutSeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
