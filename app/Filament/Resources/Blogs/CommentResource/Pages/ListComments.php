<?php

namespace App\Filament\Resources\Blogs\CommentResource\Pages;

use App\Filament\Resources\Blogs\CommentResource;
use Filament\Resources\Pages\ListRecords;

class ListComments extends ListRecords
{
    protected static string $resource = CommentResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
