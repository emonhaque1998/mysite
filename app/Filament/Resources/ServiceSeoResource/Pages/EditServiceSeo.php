<?php

namespace App\Filament\Resources\ServiceSeoResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ServiceSeoResource;

class EditServiceSeo extends EditRecord
{
    protected static string $resource = ServiceSeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        Cache::forget('dev_service_seo');
    }
}
