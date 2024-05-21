<?php

namespace App\Filament\Resources\BlogDetailResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\BlogDetailResource;

class EditBlogDetail extends EditRecord
{
    protected static string $resource = BlogDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        Cache::forget('dev_blogDetails');
    }
}
