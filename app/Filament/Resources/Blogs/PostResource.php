<?php

namespace App\Filament\Resources\Blogs;

use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Table;
use Filament\Tables;
use Modules\Blogs\App\Models\Post;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('title')->searchable()->limit(50),
                Tables\Columns\TextColumn::make('author.name')->label('Author'),
                Tables\Columns\BooleanColumn::make('published'),
                Tables\Columns\TextColumn::make('published_at')->date(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\Action::make('publish')
                    ->action(function (Post $record) {
                        $record->update(['published' => true, 'published_at' => now()]);
                    })->visible(fn($record) => !$record->published),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')->required(),
            TextInput::make('slug')->required()->unique(Post::class, 'slug'),
            Textarea::make('excerpt'),
            RichEditor::make('content')->required(),
            FileUpload::make('featured_image')->image()->directory('posts')->imagePreviewHeight('250'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\Blogs\PostResource\Pages\ListPosts::route('/'),
            'create' => \App\Filament\Resources\Blogs\PostResource\Pages\CreatePost::route('/create'),
            'edit' => \App\Filament\Resources\Blogs\PostResource\Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
