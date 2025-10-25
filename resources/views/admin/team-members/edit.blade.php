@extends('layouts.admin')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Edit Team Member') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('admin.team-members.update', $teamMember->id) }}" method="POST">
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
                                <label for="position_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('Position (English)') }}
                                </label>
                                <input type="text" 
                                       name="position_en" 
                                       id="position_en" 
                                       value="{{ old('position_en', $translations['en']['position']) }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white"
                                       required>
                                @error('position_en')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="bio_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('Bio (English)') }}
                                </label>
                                <textarea name="bio_en" 
                                          id="bio_en" 
                                          rows="4"
                                          class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">{{ old('bio_en', $translations['en']['bio']) }}</textarea>
                                @error('bio_en')
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
                                <label for="position_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('Position (Arabic)') }}
                                </label>
                                <input type="text" 
                                       name="position_ar" 
                                       id="position_ar" 
                                       value="{{ old('position_ar', $translations['ar']['position']) }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white"
                                       required>
                                @error('position_ar')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="bio_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('Bio (Arabic)') }}
                                </label>
                                <textarea name="bio_ar" 
                                          id="bio_ar" 
                                          rows="4"
                                          class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">{{ old('bio_ar', $translations['ar']['bio']) }}</textarea>
                                @error('bio_ar')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- Common Fields -->
                        <div class="mt-6 border-t border-gray-200 dark:border-gray-700 pt-6">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">{{ __('Common Information') }}</h3>
                            
                            <div class="mb-4">
                                <label for="image_url" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('Image URL') }}
                                </label>
                                <input type="text" 
                                       name="image_url" 
                                       id="image_url" 
                                       value="{{ old('image_url', $teamMember->image_url) }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">
                                @error('image_url')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="linkedin_url" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('LinkedIn URL') }}
                                </label>
                                <input type="text" 
                                       name="linkedin_url" 
                                       id="linkedin_url" 
                                       value="{{ old('linkedin_url', $teamMember->linkedin_url) }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">
                                @error('linkedin_url')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="twitter_url" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('Twitter URL') }}
                                </label>
                                <input type="text" 
                                       name="twitter_url" 
                                       id="twitter_url" 
                                       value="{{ old('twitter_url', $teamMember->twitter_url) }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">
                                @error('twitter_url')
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
                                       value="{{ old('sort_order', $teamMember->sort_order) }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">
                                @error('sort_order')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <div class="flex items-center">
                                    <input type="checkbox" 
                                           name="is_featured" 
                                           id="is_featured" 
                                           value="1"
                                           {{ old('is_featured', $teamMember->is_featured) ? 'checked' : '' }}
                                           class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                    <label for="is_featured" class="ml-2 block text-sm text-gray-900 dark:text-gray-100">
                                        {{ __('Featured Member') }}
                                    </label>
                                </div>
                                @error('is_featured')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between mt-6">
                            <a href="{{ route('admin.team-members.index') }}" 
                               class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Back') }}
                            </a>
                            <button type="submit" 
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Update Team Member') }}
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
            
            // Update tab styles
            document.querySelectorAll('.tab-button').forEach(tab => {
                tab.classList.remove('border-blue-500', 'text-blue-600', 'dark:text-blue-400');
                tab.classList.add('border-transparent', 'text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300', 'dark:text-gray-400', 'dark:hover:text-gray-300');
            });
            
            document.getElementById(`tab-${lang}`).classList.remove('border-transparent', 'text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300', 'dark:text-gray-400', 'dark:hover:text-gray-300');
            document.getElementById(`tab-${lang}`).classList.add('border-blue-500', 'text-blue-600', 'dark:text-blue-400');
        }
    </script>
@endsection