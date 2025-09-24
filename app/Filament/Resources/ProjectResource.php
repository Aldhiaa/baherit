<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Modules\Projects\Models\Project;
use Illuminate\Database\Eloquent\Builder;
use Modules\Projects\Models\ProjectCategory;
use App\Filament\Resources\ProjectResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProjectResource\RelationManagers;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')
                    ->label('Category')
                    ->options(ProjectCategory::pluck('name', 'id'))
                    ->required(),
                    Forms\Components\Tabs::make('Translations')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('English')
                            ->schema([
                                Forms\Components\TextInput::make('title.en')
                                    ->label('Title (English)')
                                    ->required()
                                    ->maxLength(255)
                                    ->reactive()
                                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                                Forms\Components\RichEditor::make('description.en')
                                    ->label('Description (English)')
                                    ->required()
                                    ->columnSpan('full'),
                                Forms\Components\Textarea::make('features.en')
                                    ->label('features (English)')
                                    ->columnSpan('full'),
                                Forms\Components\TextInput::make('client_name.en')
                                    ->label('client name (English)')
                                    ->maxLength(255),
                            ]),
                        Forms\Components\Tabs\Tab::make('Arabic')
                            ->schema([
                                Forms\Components\TextInput::make('title.ar')
                                    ->label('Title (Arabic)')
                                    ->required()
                                    ->maxLength(255)
                                    ->reactive()
                                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                                Forms\Components\RichEditor::make('description.ar')
                                    ->label('Description (Arabic)')
                                    ->required()
                                    ->columnSpan('full'),
                                Forms\Components\Textarea::make('features.ar')
                                    ->label('features (Arabic)')
                                    ->columnSpan('full'),
                                Forms\Components\TextInput::make('client_name.ar')
                                    ->label('client name (Arabic)')
                                    ->maxLength(255),
                            ]),
                    ]),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),

                Forms\Components\DatePicker::make('completion_date'),
                Forms\Components\FileUpload::make('featured_image')
                    ->image()
                    ->acceptedFileTypes([
                        'image/jpeg',
                        'image/png',
                        'image/gif',
                        'image/svg+xml',
                        'image/webp',      // ← explicitly allow webp
                    ])
                    ->required()
                    ->directory('projects'),

                Forms\Components\TextInput::make('github_url')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('demo_url')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('video_url')
                    ->url()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('client_logo')
                    ->image()
                    ->directory('projects')
                    ->maxSize(1024),
                Forms\Components\FileUpload::make('gallery')
                    ->multiple()
                    ->image()
                    ->directory('project-galleries'),
                Forms\Components\Toggle::make('is_featured')
                    ->default(false),
                Forms\Components\Toggle::make('is_active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->formatStateUsing(fn ($state, $record) => $record->getTranslation('title', app()->getLocale()))
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->sortable(),
                Tables\Columns\ImageColumn::make('featured_image'),
                Tables\Columns\IconColumn::make('is_featured')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->relationship('category', 'name'),
                Tables\Filters\TernaryFilter::make('is_featured'),
                Tables\Filters\TernaryFilter::make('is_active'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
