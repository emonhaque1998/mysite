<?php

namespace App\Filament\Resources\ServicePageResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ServicePageResource;

class EditServicePage extends EditRecord
{
    protected static string $resource = ServicePageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        Cache::forget('dev_service_page');
    }
}
