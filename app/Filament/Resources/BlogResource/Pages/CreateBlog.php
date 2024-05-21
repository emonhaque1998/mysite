<?php

namespace App\Filament\Resources\BlogResource\Pages;

use Filament\Actions;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use App\Filament\Resources\BlogResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBlog extends CreateRecord
{
    protected static string $resource = BlogResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        $data['slug'] = Str::slug($data["title"]);

        return $data;
    }

    protected function afterCreate(): void
    {
        Cache::forget('dev_blogs_two');
        Cache::forget('dev_three_blogs');
    }
}
