<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SkillItemResource\Pages;
use App\Filament\Resources\SkillItemResource\RelationManagers;
use App\Models\SkillItem;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SkillItemResource extends Resource
{
    protected static ?string $model = SkillItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 6;
    protected static ?string $navigationGroup = 'Website';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('skill_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('percentage')
                    ->required()
                    ->maxLength(255),
                FileUpload::make("logo")
                    ->imageCropAspectRatio('55:55')
                    ->imageResizeTargetWidth('55')
                    ->imageResizeTargetHeight('55')
                    ->disk('public')
                    ->directory('upload'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('skill_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('percentage')
                    ->searchable(),
                ImageColumn::make('logo')
                    ->circular(),
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
            'index' => Pages\ListSkillItems::route('/'),
            'create' => Pages\CreateSkillItem::route('/create'),
            'edit' => Pages\EditSkillItem::route('/{record}/edit'),
        ];
    }
}
