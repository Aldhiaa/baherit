<?php

namespace App\Filament\Resources\Blogs\PostResource\Pages;

use App\Filament\Resources\Blogs\PostResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = $data['user_id'] ?? Auth::id();

        if (($data['published'] ?? false) && empty($data['published_at'])) {
            $data['published_at'] = now();
        }

        if (! ($data['published'] ?? false)) {
            $data['published_at'] = null;
        }

        return $data;
    }
}
