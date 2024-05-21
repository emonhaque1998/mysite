<?php

namespace App\Filament\Resources\BlogDetailResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\BlogDetailResource;

class CreateBlogDetail extends CreateRecord
{
    protected static string $resource = BlogDetailResource::class;

    protected function afterCreate(): void
    {
        Cache::forget('dev_blogDetails');
    }
}
