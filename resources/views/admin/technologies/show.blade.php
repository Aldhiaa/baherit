@extends('layouts.admin')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Technology Details') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
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
                    
                    <!-- English Content -->
                    <div id="content-en" class="tab-content">
                        <div class="mb-6">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Name') }}</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{ $technology->getTranslation('name', 'en') }}</p>
                        </div>
                        
                        <div class="mb-6">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Description') }}</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{ $technology->getTranslation('description', 'en') ?: __('No description available') }}</p>
                        </div>
                    </div>
                    
                    <!-- Arabic Content -->
                    <div id="content-ar" class="tab-content hidden">
                        <div class="mb-6">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Name') }}</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{ $technology->getTranslation('name', 'ar') }}</p>
                        </div>
                        
                        <div class="mb-6">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Description') }}</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{ $technology->getTranslation('description', 'ar') ?: __('No description available') }}</p>
                        </div>
                    </div>
                    
                    <!-- Common Information -->
                    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Category') }}</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{ $technology->category }}</p>
                        </div>
                        
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Proficiency Level') }}</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{ $technology->proficiency_level }}%</p>
                        </div>
                        
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Logo URL') }}</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                @if($technology->logo_url)
                                    <a href="{{ $technology->logo_url }}" target="_blank" class="text-blue-500 hover:underline">{{ $technology->logo_url }}</a>
                                @else
                                    {{ __('No logo URL provided') }}
                                @endif
                            </p>
                        </div>
                        
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Featured') }}</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                @if($technology->is_featured)
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-800 dark:text-green-100">
                                        {{ __('Yes') }}
                                    </span>
                                @else
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                                        {{ __('No') }}
                                    </span>
                                @endif
                            </p>
                        </div>
                        
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Sort Order') }}</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{ $technology->sort_order }}</p>
                        </div>
                        
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Tags') }}</h3>
                            <div class="mt-1">
                                @if(is_array($technology->tags) && count($technology->tags) > 0)
                                    @foreach($technology->tags as $tag)
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-800 dark:text-blue-100 mr-2 mb-2">
                                            {{ $tag }}
                                        </span>
                                    @endforeach
                                @else
                                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('No tags') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 flex justify-end space-x-4">
                        <a href="{{ route('admin.technologies.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            {{ __('Back to List') }}
                        </a>
                        <a href="{{ route('admin.technologies.edit', $technology->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            {{ __('Edit') }}
                        </a>
                        <form action="{{ route('admin.technologies.destroy', $technology->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('{{ __('Are you sure you want to delete this technology?') }}')">
                                {{ __('Delete') }}
                            </button>
                        </form>
                    </div>
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