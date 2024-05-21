<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Blog;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\BlogCategory;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use App\Filament\Exports\BlogExporter;
use App\Filament\Imports\BlogImporter;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\ImportAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\ExportBulkAction;
use App\Filament\Resources\BlogResource\Pages;
use Filament\Actions\Exports\Enums\ExportFormat;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BlogResource\RelationManagers;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationGroup = 'Blogs';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('meta_title')
                    ->label("Meta Title Seo")
                    ->maxLength(255),
                TagsInput::make('meta_keyword')
                    ->label("Meta Keyword Seo"),
                Select::make('blog_category_id')
                    ->options(function (): array {
                        return BlogCategory::all()->pluck('category_name', 'id')->all();
                    }),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('meta_description')
                    ->label("Meta Description Seo")
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('qutation_title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('last_title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('last_description')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('banner')
                    ->imageCropAspectRatio('820:470')
                    ->imageResizeTargetWidth('820')
                    ->imageResizeTargetHeight('470')
                    ->disk('public')
                    ->directory('upload')
                    ->required(),
                FileUpload::make('images')
                    ->multiple()
                    ->imageCropAspectRatio('400:315')
                    ->imageResizeTargetWidth('400')
                    ->imageResizeTargetHeight('315')
                    ->disk('public')
                    ->directory('upload')
                    ->required(),
                Forms\Components\FileUpload::make('meta_image')
                    ->label("Meta Image Seo")
                    ->imageCropAspectRatio('300:300')
                    ->imageResizeTargetWidth('300')
                    ->imageResizeTargetHeight('300')
                    ->disk('public')
                    ->directory('upload'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('banner')
                    ->searchable(),
                Tables\Columns\TextColumn::make('qutation_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('blog_category_id')
                    ->numeric()
                    ->sortable(),
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
            ->headerActions([
                ImportAction::make()
                    ->importer(BlogImporter::class)
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    ExportBulkAction::make()
                    ->exporter(BlogExporter::class)
                    ->formats([
                        ExportFormat::Csv,
                    ])
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
