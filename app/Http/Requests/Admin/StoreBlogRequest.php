<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
{
    public function authorize(): bool
    {
        $admin = auth('admin')->user();

        return $admin ? $admin->can('create-blogs') : false;
    }

    public function rules(): array
    {
        return [
            'slug' => ['required', 'string', 'max:255', 'unique:blogs,slug'],
            'featured_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:4096'],
            'author_name' => ['nullable', 'string', 'max:255'],
            'read_time_minutes' => ['nullable', 'integer', 'min:1', 'max:120'],
            'published_at' => ['nullable', 'date'],
            'status' => ['required', 'in:draft,scheduled,published'],
            'is_featured' => ['nullable', 'boolean'],

            'title_en' => ['required', 'string', 'max:255'],
            'excerpt_en' => ['required', 'string', 'max:500'],
            'content_en' => ['required', 'string'],

            'title_ar' => ['required', 'string', 'max:255'],
            'excerpt_ar' => ['required', 'string', 'max:500'],
            'content_ar' => ['required', 'string'],
        ];
    }
}
