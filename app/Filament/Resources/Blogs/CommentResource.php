<?php

namespace App\Filament\Resources\Blogs;

use App\Filament\Resources\Blogs\CommentResource\Pages;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\Blogs\app\Models\Comment;

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('post.title')->limit(50),
                Tables\Columns\TextColumn::make('user.name')->label('Author'),
                Tables\Columns\TextColumn::make('body')->limit(100),
                Tables\Columns\BooleanColumn::make('approved'),
            ])
            ->actions([
                Tables\Actions\Action::make('approve')
                    ->action(function (Comment $record) {
                        $record->update(['approved' => true]);
                    })
                    ->visible(fn ($record) => ! $record->approved),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListComments::route('/'),
        ];
    }
}
