<?php

namespace App\Filament\Resources\ProjectCategoryResource\Pages;

use Filament\Actions;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ProjectCategoryResource;

class CreateProjectCategory extends CreateRecord
{
    protected static string $resource = ProjectCategoryResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = Str::slug($data["category_name"]);

        return $data;
    }

    protected function afterCreate(): void
    {
        Cache::forget('dev_categories_project');
    }
}
