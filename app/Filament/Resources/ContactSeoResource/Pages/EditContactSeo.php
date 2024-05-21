<?php

namespace App\Filament\Resources\ContactSeoResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ContactSeoResource;

class EditContactSeo extends EditRecord
{
    protected static string $resource = ContactSeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        Cache::forget('dev_contact_seo');
    }
}
