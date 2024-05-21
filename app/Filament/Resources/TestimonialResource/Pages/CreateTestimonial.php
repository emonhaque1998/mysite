<?php

namespace App\Filament\Resources\TestimonialResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\TestimonialResource;

class CreateTestimonial extends CreateRecord
{
    protected static string $resource = TestimonialResource::class;

    protected function afterCreate(): void
    {
        Cache::forget('dev_testimonial');
    }
}
