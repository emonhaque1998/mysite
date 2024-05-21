<?php

namespace App\Filament\Resources\ContactSeoResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ContactSeoResource;

class CreateContactSeo extends CreateRecord
{
    protected static string $resource = ContactSeoResource::class;

    protected function afterCreate(): void
    {
        Cache::forget('dev_contact_seo');
    }
}
