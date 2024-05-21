<?php

namespace App\Filament\Resources\CategoryProjectSeoResource\Pages;

use App\Filament\Resources\CategoryProjectSeoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategoryProjectSeos extends ListRecords
{
    protected static string $resource = CategoryProjectSeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
