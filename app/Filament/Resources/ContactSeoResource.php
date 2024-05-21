<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\ContactSeo;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TagsInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ContactSeoResource\Pages;
use App\Filament\Resources\ContactSeoResource\RelationManagers;

class ContactSeoResource extends Resource
{
    protected static ?string $model = ContactSeo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 6;
    protected static ?string $navigationGroup = 'SEO Section';

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
                TagsInput::make('keyword')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->imageCropAspectRatio('300:300')
                    ->imageResizeTargetWidth('300')
                    ->imageResizeTargetHeight('300')
                    ->disk('public')
                    ->directory('upload')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
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
            'index' => Pages\ListContactSeos::route('/'),
            'create' => Pages\CreateContactSeo::route('/create'),
            'edit' => Pages\EditContactSeo::route('/{record}/edit'),
        ];
    }
}
