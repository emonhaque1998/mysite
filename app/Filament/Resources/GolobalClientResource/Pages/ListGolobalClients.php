<?php

namespace App\Filament\Resources\GolobalClientResource\Pages;

use App\Filament\Resources\GolobalClientResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGolobalClients extends ListRecords
{
    protected static string $resource = GolobalClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
