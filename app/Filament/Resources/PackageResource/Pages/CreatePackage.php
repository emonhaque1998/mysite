<?php

namespace App\Filament\Resources\PackageResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\PackageResource;

class CreatePackage extends CreateRecord
{
    protected static string $resource = PackageResource::class;

    protected function afterCreate(): void
    {
        Cache::forget('dev_packages');
    }
}
