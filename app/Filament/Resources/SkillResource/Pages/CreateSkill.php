<?php

namespace App\Filament\Resources\SkillResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use App\Filament\Resources\SkillResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSkill extends CreateRecord
{
    protected static string $resource = SkillResource::class;

    protected function afterCreate(): void
    {
        Cache::forget('dev_skill');
    }
}
