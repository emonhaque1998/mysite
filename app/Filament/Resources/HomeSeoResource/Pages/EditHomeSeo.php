<?php

namespace App\Filament\Resources\HomeSeoResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\HomeSeoResource;

class EditHomeSeo extends EditRecord
{
    protected static string $resource = HomeSeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        Cache::forget('dev_home_seo');
    }
}
