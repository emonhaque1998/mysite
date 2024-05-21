<?php

namespace App\Filament\Resources\HeroResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use App\Filament\Resources\HeroResource;
use Filament\Resources\Pages\CreateRecord;

class CreateHero extends CreateRecord
{
    protected static string $resource = HeroResource::class;


    protected function afterCreate(): void
    {
        Cache::forget('dev_hero');
    }
}
