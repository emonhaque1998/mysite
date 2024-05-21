<?php

namespace App\Filament\Resources\ProjectSeoResource\Pages;

use App\Filament\Resources\ProjectSeoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProjectSeos extends ListRecords
{
    protected static string $resource = ProjectSeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
