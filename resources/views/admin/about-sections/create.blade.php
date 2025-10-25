@extends('layouts.admin')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Create About Section') }}
    </h2>
@endsection

@section('content')
    <div class="container mx-auto py-6">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                <div class="p-6">
                    <form action="{{ route('admin.about-sections.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Section Name -->
                        <div class="mb-6">
                            <label for="section_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Section Name') }} <span class="text-red-500">*</span></label>
                            <input type="text" name="section_name" id="section_name" class="form-input w-full" value="{{ old('section_name') }}" required>
                            <p class="text-xs text-gray-500 mt-1">{{ __('A unique identifier for this section (e.g. hero, story, vision)') }}</p>
                            @error('section_name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Language Tabs -->
                        <div class="mb-6">
                            <div class="border-b border-gray-200 dark:border-gray-700">
                                <nav class="-mb-px flex space-x-4" aria-label="Tabs">
                                    <button type="button" onclick="switchTab('en')" id="tab-en" class="border-blue-500 text-blue-600 dark:text-blue-400 py-2 px-1 border-b-2 font-medium text-sm">
                                        English
                                    </button>
                                    <button type="button" onclick="switchTab('ar')" id="tab-ar" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-2 px-1 border-b-2 font-medium text-sm">
                                        العربية
                                    </button>
                                </nav>
                            </div>
                        </div>

                        <!-- English Fields -->
                        <div id="content-en" class="language-content">
                            <div class="mb-6">
                                <label for="title_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Title (English)') }} <span class="text-red-500">*</span></label>
                                <input type="text" name="title[en]" id="title_en" class="form-input w-full" value="{{ old('title.en') }}" required>
                                @error('title.en')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="description_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Description (English)') }} <span class="text-red-500">*</span></label>
                                <textarea name="description[en]" id="description_en" rows="4" class="form-textarea w-full" required>{{ old('description.en') }}</textarea>
                                @error('description.en')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Arabic Fields -->
                        <div id="content-ar" class="language-content hidden">
                            <div class="mb-6">
                                <label for="title_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Title (Arabic)') }} <span class="text-red-500">*</span></label>
                                <input type="text" name="title[ar]" id="title_ar" class="form-input w-full" value="{{ old('title.ar') }}" required>
                                @error('title.ar')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="description_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Description (Arabic)') }} <span class="text-red-500">*</span></label>
                                <textarea name="description[ar]" id="description_ar" rows="4" class="form-textarea w-full" required>{{ old('description.ar') }}</textarea>
                                @error('description.ar')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Common Fields -->
                        <div class="mb-6">
                            <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Image') }}</label>
                            <input type="file" name="image" id="image" class="form-input w-full">
                            <p class="text-xs text-gray-500 mt-1">{{ __('Recommended size: 800x600px, max 2MB') }}</p>
                            @error('image')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="sort_order" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Sort Order') }} <span class="text-red-500">*</span></label>
                            <input type="number" name="sort_order" id="sort_order" class="form-input w-full" value="{{ old('sort_order', 0) }}" required>
                            @error('sort_order')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="flex items-center">
                                <input type="checkbox" name="is_active" class="form-checkbox" {{ old('is_active') ? 'checked' : '' }}>
                                <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">{{ __('Active') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-between mt-8">
                            <a href="{{ route('admin.about-sections.index') }}" class="btn-secondary">
                                {{ __('Cancel') }}
                            </a>
                            <button type="submit" class="btn-primary">
                                {{ __('Create Section') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function switchTab(lang) {
            // Hide all content divs
            document.querySelectorAll('.language-content').forEach(div => {
                div.classList.add('hidden');
            });
            
            // Show the selected content div
            document.getElementById(`content-${lang}`).classList.remove('hidden');
            
            // Update tab styling
            document.querySelectorAll('[id^="tab-"]').forEach(tab => {
                tab.classList.remove('border-blue-500', 'text-blue-600', 'dark:text-blue-400');
                tab.classList.add('border-transparent', 'text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300');
            });
            
            document.getElementById(`tab-${lang}`).classList.remove('border-transparent', 'text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300');
            document.getElementById(`tab-${lang}`).classList.add('border-blue-500', 'text-blue-600', 'dark:text-blue-400');
        }
    </script>
@endsection