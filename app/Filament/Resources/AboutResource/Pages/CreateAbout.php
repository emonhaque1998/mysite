<?php

namespace App\Filament\Resources\AboutResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use App\Filament\Resources\AboutResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAbout extends CreateRecord
{
    protected static string $resource = AboutResource::class;

    protected function afterCreate(): void
    {
        Cache::forget('dev_about');
    }
}
