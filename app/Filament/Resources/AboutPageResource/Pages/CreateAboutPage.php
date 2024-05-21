<?php

namespace App\Filament\Resources\AboutPageResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\AboutPageResource;

class CreateAboutPage extends CreateRecord
{
    protected static string $resource = AboutPageResource::class;


    protected function afterCreate(): void
    {
        Cache::forget('dev_about_page');
    }
}
