<?php

namespace App\Filament\Resources\HomeSeoResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\HomeSeoResource;

class CreateHomeSeo extends CreateRecord
{
    protected static string $resource = HomeSeoResource::class;

    protected function afterCreate(): void
    {
        Cache::forget('dev_home_seo');
    }
}
