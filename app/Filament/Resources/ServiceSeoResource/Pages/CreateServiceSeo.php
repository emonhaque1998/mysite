<?php

namespace App\Filament\Resources\ServiceSeoResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ServiceSeoResource;

class CreateServiceSeo extends CreateRecord
{
    protected static string $resource = ServiceSeoResource::class;

    protected function afterCreate(): void
    {
        Cache::forget('dev_service_seo');
    }
}
