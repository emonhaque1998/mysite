<?php

namespace App\Filament\Resources\ServiceSeoResource\Pages;

use App\Filament\Resources\ServiceSeoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServiceSeos extends ListRecords
{
    protected static string $resource = ServiceSeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
