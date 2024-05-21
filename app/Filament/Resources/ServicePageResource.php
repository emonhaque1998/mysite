<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ServicePage;
use Filament\Resources\Resource;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ServicePageResource\Pages;
use App\Filament\Resources\ServicePageResource\RelationManagers;

class ServicePageResource extends Resource
{
    protected static ?string $model = ServicePage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationGroup = 'Pages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TagsInput::make('include')
                    ->required(),
                FileUpload::make('first_image')
                    ->imageCropAspectRatio('522:446')
                    ->imageResizeTargetWidth('522')
                    ->imageResizeTargetHeight('446')
                    ->disk('public')
                    ->directory('upload'),
                FileUpload::make('second_image')
                    ->imageCropAspectRatio('342:339')
                    ->imageResizeTargetWidth('342')
                    ->imageResizeTargetHeight('339')
                    ->disk('public')
                    ->directory('upload'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('first_image'),
                Tables\Columns\ImageColumn::make('second_image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServicePages::route('/'),
            'create' => Pages\CreateServicePage::route('/create'),
            'edit' => Pages\EditServicePage::route('/{record}/edit'),
        ];
    }
}
