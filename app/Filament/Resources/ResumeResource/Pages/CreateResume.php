<?php

namespace App\Filament\Resources\ResumeResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use App\Filament\Resources\ResumeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateResume extends CreateRecord
{
    protected static string $resource = ResumeResource::class;

    protected function afterCreate(): void
    {
        Cache::forget('dev_resumes');
    }
}
