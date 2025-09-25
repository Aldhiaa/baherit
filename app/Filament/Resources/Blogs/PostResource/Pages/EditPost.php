<?php

namespace App\Filament\Resources\Blogs\PostResource\Pages;

use App\Filament\Resources\Blogs\PostResource;
use Filament\Resources\Pages\EditRecord;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (($data['published'] ?? false) && empty($data['published_at'])) {
            $data['published_at'] = now();
        }

        if (! ($data['published'] ?? false)) {
            $data['published_at'] = null;
        }

        return $data;
    }
}
