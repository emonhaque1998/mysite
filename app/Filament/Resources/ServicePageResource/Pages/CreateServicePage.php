<?php

namespace App\Filament\Resources\ServicePageResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ServicePageResource;

class CreateServicePage extends CreateRecord
{
    protected static string $resource = ServicePageResource::class;

    protected function afterCreate(): void
    {
        Cache::forget('dev_service_page');
    }
}
