<?php

namespace App\Filament\Resources\Blogs\CommentResource\Pages;

use App\Filament\Resources\Blogs\CommentResource;
use App\Filament\Resources\Blogs\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListComments extends ListRecords
{
    protected static string $resource = CommentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('createPost')
                ->label(__('Create Post'))
                ->icon('heroicon-o-plus')
                ->url(PostResource::getUrl('create')),
        ];
    }
}
