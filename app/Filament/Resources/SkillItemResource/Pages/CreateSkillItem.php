<?php

namespace App\Filament\Resources\SkillItemResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\SkillItemResource;

class CreateSkillItem extends CreateRecord
{
    protected static string $resource = SkillItemResource::class;

    protected function afterCreate(): void
    {
        Cache::forget('dev_skillItems');
    }
}
