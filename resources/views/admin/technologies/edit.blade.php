@extends('layouts.admin')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Edit Technology') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('admin.technologies.update', $technology->id) }}" method="POST">
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
                                <label for="name_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('Name (English)') }}
                                </label>
                                <input type="text" 
                                       name="name_en" 
                                       id="name_en" 
                                       value="{{ old('name_en', $translations['en']['name']) }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white"
                                       required>
                                @error('name_en')
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
                                          class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">{{ old('description_en', $translations['en']['description']) }}</textarea>
                                @error('description_en')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- Arabic Fields -->
                        <div id="content-ar" class="tab-content hidden">
                            <div class="mb-4">
                                <label for="name_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('Name (Arabic)') }}
                                </label>
                                <input type="text" 
                                       name="name_ar" 
                                       id="name_ar" 
                                       value="{{ old('name_ar', $translations['ar']['name']) }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white"
                                       required>
                                @error('name_ar')
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
                                          class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">{{ old('description_ar', $translations['ar']['description']) }}</textarea>
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
                                        <option value="{{ $value }}" {{ old('category', $technology->category) == $value ? 'selected' : '' }}>{{ $label }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="logo_url" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('Logo URL') }}
                                </label>
                                <input type="text" 
                                       name="logo_url" 
                                       id="logo_url" 
                                       value="{{ old('logo_url', $technology->logo_url) }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">
                                @error('logo_url')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="proficiency_level" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('Proficiency Level (0-100)') }}
                                </label>
                                <input type="number" 
                                       name="proficiency_level" 
                                       id="proficiency_level" 
                                       value="{{ old('proficiency_level', $technology->proficiency_level) }}"
                                       min="0"
                                       max="100"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">
                                @error('proficiency_level')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="tags" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('Tags (comma separated)') }}
                                </label>
                                <input type="text" 
                                       name="tags" 
                                       id="tags" 
                                       value="{{ old('tags', $tagsString) }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">
                                @error('tags')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="sort_order" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('Sort Order') }}
                                </label>
                                <input type="number" 
                                       name="sort_order" 
                                       id="sort_order" 
                                       value="{{ old('sort_order', $technology->sort_order) }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">
                                @error('sort_order')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label class="flex items-center">
                                    <input type="checkbox" 
                                           name="is_featured" 
                                           id="is_featured" 
                                           value="1"
                                           {{ old('is_featured', $technology->is_featured) ? 'checked' : '' }}
                                           class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:border-gray-600 dark:bg-gray-700">
                                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Featured Technology') }}</span>
                                </label>
                                @error('is_featured')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('admin.technologies.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">
                                {{ __('Cancel') }}
                            </a>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function switchTab(lang) {
            // Hide all content
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });
            
            // Show selected content
            document.getElementById(`content-${lang}`).classList.remove('hidden');
            
            // Update tab styling
            document.querySelectorAll('.tab-button').forEach(tab => {
                tab.classList.remove('border-blue-500', 'text-blue-600', 'dark:text-blue-400');
                tab.classList.add('border-transparent', 'text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300', 'dark:text-gray-400', 'dark:hover:text-gray-300');
            });
            
            document.getElementById(`tab-${lang}`).classList.remove('border-transparent', 'text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300', 'dark:text-gray-400', 'dark:hover:text-gray-300');
            document.getElementById(`tab-${lang}`).classList.add('border-blue-500', 'text-blue-600', 'dark:text-blue-400');
        }
    </script>
@endsection