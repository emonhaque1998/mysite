<?php

namespace App\Filament\Resources\CategoryProjectSeoResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\CategoryProjectSeoResource;

class CreateCategoryProjectSeo extends CreateRecord
{
    protected static string $resource = CategoryProjectSeoResource::class;

    protected function afterCreate(): void
    {
        Cache::forget('dev_category_project_seo');
    }
}
