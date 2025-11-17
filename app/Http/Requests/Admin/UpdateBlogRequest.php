<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBlogRequest extends FormRequest
{
    public function authorize(): bool
    {
        $admin = auth('admin')->user();

        return $admin ? $admin->can('edit-blogs') : false;
    }

    public function rules(): array
    {
        /** @var \App\Models\Blog|null $blog */
        $blog = request()->route('blog');
        $blogId = $blog ? $blog->id : null;

        return [
            'slug' => [
                'required',
                'string',
                'max:255',
                Rule::unique('blogs', 'slug')->ignore($blogId),
            ],
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
