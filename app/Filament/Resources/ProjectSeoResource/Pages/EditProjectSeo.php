<?php

namespace App\Filament\Resources\ProjectSeoResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ProjectSeoResource;

class EditProjectSeo extends EditRecord
{
    protected static string $resource = ProjectSeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        Cache::forget('dev_project_seo');
    }
}
