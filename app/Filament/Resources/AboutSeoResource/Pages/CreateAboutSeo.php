<?php

namespace App\Filament\Resources\AboutSeoResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\AboutSeoResource;

class CreateAboutSeo extends CreateRecord
{
    protected static string $resource = AboutSeoResource::class;

    protected function afterCreate(): void
    {
        Cache::forget('dev_about_seo');
    }
}
