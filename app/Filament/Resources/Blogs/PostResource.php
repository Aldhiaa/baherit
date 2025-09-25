<?php

namespace App\Filament\Resources\Blogs;

use App\Filament\Resources\Blogs\PostResource\Pages;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Modules\Blogs\app\Models\Post;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Post Details')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                        Forms\Components\Select::make('user_id')
                            ->label('Author')
                            ->relationship('author', 'name')
                            ->searchable()
                            ->preload()
                            ->default(fn () => auth()->id())
                            ->nullable(),
                        Forms\Components\Textarea::make('excerpt')
                            ->rows(4)
                            ->maxLength(500)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
                Forms\Components\Section::make('Content')
                    ->schema([
                        Forms\Components\RichEditor::make('content')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('featured_image')
                            ->image()
                            ->directory('posts')
                            ->imagePreviewHeight('250')
                            ->downloadable()
                            ->columnSpanFull(),
                    ]),
                Forms\Components\Section::make('Publishing')
                    ->schema([
                        Forms\Components\Toggle::make('published')
                            ->label('Published')
                            ->default(false)
                            ->inline(false),
                        Forms\Components\DateTimePicker::make('published_at')
                            ->label('Published at')
                            ->seconds(false)
                            ->hint('Defaults to now when you publish.')
                            ->nullable(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('author.name')
                    ->label('Author')
                    ->toggleable(),
                Tables\Columns\BooleanColumn::make('published'),
                Tables\Columns\TextColumn::make('published_at')
                    ->date(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('published'),
            ])
            ->actions([
                Tables\Actions\Action::make('publish')
                    ->action(function (Post $record) {
                        $record->update([
                            'published' => true,
                            'published_at' => now(),
                        ]);
                    })
                    ->visible(fn ($record) => ! $record->published),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
