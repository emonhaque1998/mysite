<?php

namespace App\Filament\Resources\BlogCategoryResource\Pages;

use Filament\Actions;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\BlogCategoryResource;

class CreateBlogCategory extends CreateRecord
{
    protected static string $resource = BlogCategoryResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = Str::slug($data["category_name"]);

        return $data;
    }

    protected function afterCreate(): void
    {
        Cache::forget('dev_categories');
    }
}
