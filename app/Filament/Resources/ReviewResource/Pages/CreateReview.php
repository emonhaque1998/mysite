<?php

namespace App\Filament\Resources\ReviewResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use App\Filament\Resources\ReviewResource;
use Filament\Resources\Pages\CreateRecord;

class CreateReview extends CreateRecord
{
    protected static string $resource = ReviewResource::class;



    protected function afterCreate(): void
    {
        Cache::forget('dev_reviews');
    }
}
