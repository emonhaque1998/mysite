<?php

namespace App\Filament\Resources\ProjectSeoResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ProjectSeoResource;

class CreateProjectSeo extends CreateRecord
{
    protected static string $resource = ProjectSeoResource::class;

    protected function afterCreate(): void
    {
        Cache::forget('dev_project_seo');
    }
}
