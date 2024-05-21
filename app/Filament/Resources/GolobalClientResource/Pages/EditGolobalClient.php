<?php

namespace App\Filament\Resources\GolobalClientResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Cache;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\GolobalClientResource;

class EditGolobalClient extends EditRecord
{
    protected static string $resource = GolobalClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        Cache::forget('dev_global_client');
    }
}
