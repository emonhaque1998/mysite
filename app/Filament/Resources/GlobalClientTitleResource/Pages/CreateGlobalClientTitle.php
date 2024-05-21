<?php

namespace App\Filament\Resources\GlobalClientTitleResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\GlobalClientTitleResource;

class CreateGlobalClientTitle extends CreateRecord
{
    protected static string $resource = GlobalClientTitleResource::class;

    protected function afterCreate(): void
    {
        Cache::forget('dev_global_title');
    }
}
