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
                Forms\Components\Tabs::make('Translations')
                    ->columnSpan('full')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('English')
                            ->schema([
                                Forms\Components\TextInput::make('title.en')
                                    ->label('Title (English)')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                                Forms\Components\Textarea::make('excerpt.en')
                                    ->label('Excerpt (English)')
                                    ->rows(4)
                                    ->maxLength(500)
                                    ->columnSpanFull(),
                                Forms\Components\RichEditor::make('content.en')
                                    ->label('Content (English)')
                                    ->required()
                                    ->columnSpanFull(),
                            ]),
                        Forms\Components\Tabs\Tab::make('Arabic')
                            ->schema([
                                Forms\Components\TextInput::make('title.ar')
                                    ->label('Title (Arabic)')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                                        if (! $get('slug')) {
                                            $set('slug', Str::slug($state));
                                        }
                                    }),
                                Forms\Components\Textarea::make('excerpt.ar')
                                    ->label('Excerpt (Arabic)')
                                    ->rows(4)
                                    ->maxLength(500)
                                    ->columnSpanFull(),
                                Forms\Components\RichEditor::make('content.ar')
                                    ->label('Content (Arabic)')
                                    ->required()
                                    ->columnSpanFull(),
                            ]),
                    ]),
                Forms\Components\Section::make('Details')
                    ->schema([
                        Forms\Components\Select::make('user_id')
                            ->label('Author')
                            ->relationship('author', 'name')
                            ->searchable()
                            ->preload()
                            ->default(fn () => auth()->id())
                            ->nullable(),
                        Forms\Components\FileUpload::make('featured_image')
                            ->image()
                            ->directory('posts')
                            ->imagePreviewHeight('250')
                            ->downloadable(),
                        Forms\Components\Toggle::make('published')
                            ->label('Published')
                            ->default(false),
                        Forms\Components\DateTimePicker::make('published_at')
                            ->label('Published at')
                            ->seconds(false)
                            ->hint('Defaults to now when you publish.')
                            ->nullable(),
                    ])
                    ->columns(2),
                Forms\Components\Hidden::make('slug'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->formatStateUsing(fn ($state, Post $record) => $record->getTranslation('title', app()->getLocale()))
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
