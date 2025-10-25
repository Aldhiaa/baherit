@extends('layouts.admin')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Edit Service') }}
    </h2>
@endsection

@section('scripts')
<script>
    function switchTab(lang) {
        // Hide all tab contents
        document.querySelectorAll('.tab-content').forEach(content => {
            content.classList.add('hidden');
        });
        
        // Show the selected tab content
        document.getElementById('content-' + lang).classList.remove('hidden');
        
        // Update tab button styles
        document.querySelectorAll('.tab-button').forEach(button => {
            button.classList.remove('border-blue-500', 'text-blue-600', 'dark:text-blue-400');
            button.classList.add('border-transparent', 'text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300', 'dark:text-gray-400', 'dark:hover:text-gray-300');
        });
        
        // Highlight the active tab button
        document.getElementById('tab-' + lang).classList.remove('border-transparent', 'text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300', 'dark:text-gray-400', 'dark:hover:text-gray-300');
        document.getElementById('tab-' + lang).classList.add('border-blue-500', 'text-blue-600', 'dark:text-blue-400');
    }
</script>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('admin.services.update', $service) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <!-- Tabs for languages -->
                        <div class="mb-6">
                            <div class="border-b border-gray-200 dark:border-gray-700">
                                <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                                    <button type="button" id="tab-en" onclick="switchTab('en')" 
                                            class="tab-button border-blue-500 text-blue-600 dark:text-blue-400 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                        English
                                    </button>
                                    <button type="button" id="tab-ar" onclick="switchTab('ar')"
                                            class="tab-button border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                        العربية
                                    </button>
                                </nav>
                            </div>
                        </div>
                        
                        <!-- English Fields -->
                        <div id="content-en" class="tab-content">
                            <div class="mb-4">
                                <label for="title_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('Title (English)') }}
                                </label>
                                <input type="text" 
                                       name="title_en" 
                                       id="title_en" 
                                       value="{{ old('title_en', $translations['en']['title'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white"
                                       required>
                                @error('title_en')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="description_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('Description (English)') }}
                                </label>
                                <textarea name="description_en" 
                                          id="description_en" 
                                          rows="4"
                                          class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white"
                                          required>{{ old('description_en', $translations['en']['description'] ?? '') }}</textarea>
                                @error('description_en')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- Arabic Fields -->
                        <div id="content-ar" class="tab-content hidden">
                            <div class="mb-4">
                                <label for="title_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('Title (Arabic)') }}
                                </label>
                                <input type="text" 
                                       name="title_ar" 
                                       id="title_ar" 
                                       value="{{ old('title_ar', $translations['ar']['title'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white"
                                       required>
                                @error('title_ar')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="description_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('Description (Arabic)') }}
                                </label>
                                <textarea name="description_ar" 
                                          id="description_ar" 
                                          rows="4"
                                          class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white"
                                          required>{{ old('description_ar', $translations['ar']['description'] ?? '') }}</textarea>
                                @error('description_ar')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- Common Fields -->
                        <div class="mt-6">
                            <div class="mb-4">
                                <label for="category" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('Category') }}
                                </label>
                                <select name="category" 
                                        id="category" 
                                        class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white"
                                        required>
                                    <option value="">{{ __('Select Category') }}</option>
                                    @foreach($categories as $value => $label)
                                        <option value="{{ $value }}" {{ old('category', $service->category) == $value ? 'selected' : '' }}>{{ $label }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="icon" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('Icon (optional)') }}
                                </label>
                                <input type="text" 
                                       name="icon" 
                                       id="icon" 
                                       value="{{ old('icon', $service->icon) }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">
                                <small class="text-gray-500 dark:text-gray-400">{{ __('Font Awesome icon class or SVG path') }}</small>
                                @error('icon')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="features" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('Features (optional)') }}
                                </label>
                                <textarea name="features" 
                                          id="features" 
                                          rows="4"
                                          class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white"
                                          placeholder="{{ __('Enter one feature per line') }}">{{ old('features', $featuresString) }}</textarea>
                                @error('features')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="timeline" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('Timeline (optional)') }}
                                </label>
                                <input type="text" 
                                       name="timeline" 
                                       id="timeline" 
                                       value="{{ old('timeline', $service->timeline) }}"
                                       placeholder="{{ __('e.g., 2-4 weeks, 1-2 months') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">
                                @error('timeline')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between mt-6">
                            <a href="{{ route('admin.services.index') }}" 
                               class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Back') }}
                            </a>
                            <button type="submit" 
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Update Service') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection