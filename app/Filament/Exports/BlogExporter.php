<?php

namespace App\Filament\Exports;

use App\Models\Blog;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class BlogExporter extends Exporter
{
    protected static ?string $model = Blog::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id')
                ->label('ID'),
            ExportColumn::make('title'),
            ExportColumn::make('user_id'),
            ExportColumn::make('banner'),
            ExportColumn::make('description'),
            ExportColumn::make('qutation_title'),
            ExportColumn::make('images'),
            ExportColumn::make('slug'),
            ExportColumn::make('last_title'),
            ExportColumn::make('last_description'),
            ExportColumn::make('blog_category_id'),
            ExportColumn::make('created_at'),
            ExportColumn::make('updated_at'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your blog export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
