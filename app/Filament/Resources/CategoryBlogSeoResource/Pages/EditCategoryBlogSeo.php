<?php

namespace App\Filament\Resources\CategoryBlogSeoResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\CategoryBlogSeoResource;

class EditCategoryBlogSeo extends EditRecord
{
    protected static string $resource = CategoryBlogSeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        Cache::forget('dev_category_blog_seo');
    }
}
