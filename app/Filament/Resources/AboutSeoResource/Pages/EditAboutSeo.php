<?php

namespace App\Filament\Resources\AboutSeoResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\AboutSeoResource;

class EditAboutSeo extends EditRecord
{
    protected static string $resource = AboutSeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        Cache::forget('dev_about_seo');
    }
}
