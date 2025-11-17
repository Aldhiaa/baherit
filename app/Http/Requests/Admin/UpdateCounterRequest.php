<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCounterRequest extends FormRequest
{
    public function authorize(): bool
    {
        $admin = auth('admin')->user();

        return $admin ? $admin->can('edit-counters') : false;
    }

    public function rules(): array
    {
        /** @var \App\Models\Counter|null $counter */
        $counter = $this->route('counter');
        $counterId = $counter ? $counter->id : null;

        return [
            'key' => [
                'required',
                'string',
                'max:100',
                Rule::unique('counters', 'key')->ignore($counterId),
            ],
            'icon' => ['nullable', 'image', 'mimes:jpg,jpeg,png,svg,webp', 'max:2048'],
            'target_value' => ['required', 'integer', 'min:0'],
            'display_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],

            'label_en' => ['required', 'string', 'max:255'],
            'label_ar' => ['required', 'string', 'max:255'],
        ];
    }
}
