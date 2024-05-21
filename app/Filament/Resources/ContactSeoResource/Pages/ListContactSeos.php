<?php

namespace App\Filament\Resources\ContactSeoResource\Pages;

use App\Filament\Resources\ContactSeoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContactSeos extends ListRecords
{
    protected static string $resource = ContactSeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
