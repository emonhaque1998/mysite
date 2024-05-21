<?php

namespace App\Filament\Resources\CategoryProjectSeoResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\CategoryProjectSeoResource;

class EditCategoryProjectSeo extends EditRecord
{
    protected static string $resource = CategoryProjectSeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        Cache::forget('dev_category_project_seo');
    }
}
