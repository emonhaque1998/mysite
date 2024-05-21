<?php

namespace App\Filament\Resources\CategoryBlogSeoResource\Pages;

use App\Filament\Resources\CategoryBlogSeoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategoryBlogSeos extends ListRecords
{
    protected static string $resource = CategoryBlogSeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
