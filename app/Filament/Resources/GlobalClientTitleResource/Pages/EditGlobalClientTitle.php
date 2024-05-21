<?php

namespace App\Filament\Resources\GlobalClientTitleResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\GlobalClientTitleResource;

class EditGlobalClientTitle extends EditRecord
{
    protected static string $resource = GlobalClientTitleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        Cache::forget('dev_global_title');
    }
}
