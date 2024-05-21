<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Project;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ProjectCategory;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProjectResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProjectResource\RelationManagers;
use Filament\Forms\Components\RichEditor;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationGroup = 'Project';

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
                Forms\Components\TextInput::make('sub_title')
                    ->required()
                    ->maxLength(255),
                RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('meta_description')
                    ->label("Meta Description Seo")
                    ->columnSpanFull(),
                TagsInput::make('include')
                    ->required(),
                Forms\Components\DateTimePicker::make('publish_date')
                    ->required(),
                Forms\Components\Textarea::make('summary')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('clinet_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('project_url')
                    ->url()
                    ->suffixIcon('heroicon-m-globe-alt')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('location')
                    ->required()
                    ->maxLength(255),
                Select::make('project_category_id')
                    ->options(function (): array {
                        return ProjectCategory::all()->pluck('category_name', 'id')->all();
                    }),
                FileUpload::make('banner')
                    ->imageCropAspectRatio('1290:590')
                    ->imageResizeTargetWidth('1290')
                    ->imageResizeTargetHeight('590')
                    ->disk('public')
                    ->directory('upload')
                    ->required(),
                FileUpload::make('small_banner')
                    ->imageCropAspectRatio('630:500')
                    ->imageResizeTargetWidth('630')
                    ->imageResizeTargetHeight('500')
                    ->disk('public')
                    ->directory('upload')
                    ->required(),
                FileUpload::make('images')
                    ->multiple()
                    ->imageCropAspectRatio('410:320')
                    ->imageResizeTargetWidth('410')
                    ->imageResizeTargetHeight('320')
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
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sub_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('banner')
                    ->searchable(),
                Tables\Columns\TextColumn::make('clinet_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('publish_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('project_category_id')
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
