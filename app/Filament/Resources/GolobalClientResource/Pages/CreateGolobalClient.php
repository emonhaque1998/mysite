<?php

namespace App\Filament\Resources\GolobalClientResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\GolobalClientResource;

class CreateGolobalClient extends CreateRecord
{
    protected static string $resource = GolobalClientResource::class;

    protected function afterCreate(): void
    {
        Cache::forget('dev_global_client');
    }
}
