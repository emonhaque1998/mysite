<?php

namespace App\Filament\Resources\BlogSeoResource\Pages;

use App\Filament\Resources\BlogSeoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBlogSeos extends ListRecords
{
    protected static string $resource = BlogSeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
