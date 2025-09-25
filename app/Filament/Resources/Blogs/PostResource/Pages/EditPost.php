<?php

namespace App\Filament\Resources\Blogs\PostResource\Pages;

use App\Filament\Resources\Blogs\PostResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;
use Modules\Blogs\app\Models\Post;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['slug'] = $this->generateUniqueSlug($data, $data['slug'] ?? null);

        if (($data['published'] ?? false) && empty($data['published_at'])) {
            $data['published_at'] = now();
        }

        if (! ($data['published'] ?? false)) {
            $data['published_at'] = null;
        }

        return $data;
    }

    protected function generateUniqueSlug(array $data, ?string $currentSlug = null): string
    {
        $slugBase = $currentSlug ?: Str::slug($this->extractTitleForSlug($data));
        $slug = $slugBase;
        $counter = 2;

        while (
            Post::query()
                ->where('slug', $slug)
                ->whereKeyNot($this->record->getKey())
                ->exists()
        ) {
            $slug = $slugBase.'-'.$counter;
            $counter++;
        }

        return $slug;
    }

    protected function extractTitleForSlug(array $data): string
    {
        $locale = app()->getLocale();
        $title = data_get($data, "title.$locale");

        if (! $title) {
            $fallback = config('app.fallback_locale');
            if ($fallback) {
                $title = data_get($data, "title.$fallback");
            }
        }

        if (! $title && ! empty($data['title'])) {
            $title = collect($data['title'])->first();
        }

        return $title ?: Str::random(6);
    }
}
