<?php

namespace App\Filament\Resources\SkillItemResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\SkillItemResource;

class EditSkillItem extends EditRecord
{
    protected static string $resource = SkillItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        Cache::forget('dev_skillItems');
    }
}
