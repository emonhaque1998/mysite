<?php

namespace App\Filament\Resources\BlogSeoResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\BlogSeoResource;

class CreateBlogSeo extends CreateRecord
{
    protected static string $resource = BlogSeoResource::class;

    protected function afterCreate(): void
    {
        Cache::forget('dev_blog_seo');
    }
}
