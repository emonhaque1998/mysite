<?php

namespace App\Filament\Resources\CategoryBlogSeoResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\CategoryBlogSeoResource;

class CreateCategoryBlogSeo extends CreateRecord
{
    protected static string $resource = CategoryBlogSeoResource::class;

    protected function afterCreate(): void
    {
        Cache::forget('dev_category_blog_seo');
    }
}
