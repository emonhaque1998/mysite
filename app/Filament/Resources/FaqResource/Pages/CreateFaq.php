<?php

namespace App\Filament\Resources\FaqResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use App\Filament\Resources\FaqResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFaq extends CreateRecord
{
    protected static string $resource = FaqResource::class;

    protected function afterCreate(): void
    {
        Cache::forget('dev_faqs');
    }
}
