@extends('layouts.admin')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('View About Section') }}
    </h2>
@endsection

@section('content')
    <div class="container mx-auto py-6">
        <div class="max-w-4xl mx-auto">
            <div class="mb-6 flex justify-between items-center">
                <a href="{{ route('admin.about-sections.index') }}" class="btn-secondary">
                    <i class="fas fa-arrow-left mr-1"></i> {{ __('Back to List') }}
                </a>
                <div class="flex space-x-2">
                    <a href="{{ route('admin.about-sections.edit', $aboutSection) }}" class="btn-secondary">
                        <i class="fas fa-edit mr-1"></i> {{ __('Edit') }}
                    </a>
                    <form action="{{ route('admin.about-sections.destroy', $aboutSection) }}" method="POST" class="inline" onsubmit="return confirm('{{ __('Are you sure you want to delete this section?') }}')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-danger">
                            <i class="fas fa-trash mr-1"></i> {{ __('Delete') }}
                        </button>
                    </form>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                <div class="p-6">
                    <!-- Section Info -->
                    <div class="mb-8">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">{{ __('Section Information') }}</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('Section Name') }}</p>
                                <p class="mt-1 text-base text-gray-900 dark:text-gray-100">{{ $aboutSection->section_name }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('Status') }}</p>
                                <p class="mt-1">
                                    @if($aboutSection->is_active)
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-700 dark:text-green-100">
                                            <svg class="-ml-0.5 mr-1.5 h-2 w-2 text-green-400" fill="currentColor" viewBox="0 0 8 8">
                                                <circle cx="4" cy="4" r="3" />
                                            </svg>
                                            {{ __('Active') }}
                                        </span>
                                    @else
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-700 dark:text-red-100">
                                            <svg class="-ml-0.5 mr-1.5 h-2 w-2 text-red-400" fill="currentColor" viewBox="0 0 8 8">
                                                <circle cx="4" cy="4" r="3" />
                                            </svg>
                                            {{ __('Inactive') }}
                                        </span>
                                    @endif
                                </p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('Sort Order') }}</p>
                                <p class="mt-1 text-base text-gray-900 dark:text-gray-100">{{ $aboutSection->sort_order }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('Created At') }}</p>
                                <p class="mt-1 text-base text-gray-900 dark:text-gray-100">{{ $aboutSection->created_at->format('M d, Y H:i') }}</p>
                            </div>
                        </div>
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

                    <!-- English Content -->
                    <div id="content-en" class="language-content">
                        <div class="mb-6">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">{{ __('English Content') }}</h3>
                            <div class="mb-4">
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('Title') }}</p>
                                <p class="mt-1 text-base text-gray-900 dark:text-gray-100">{{ $aboutSection->getTranslation('title', 'en') }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('Description') }}</p>
                                <div class="mt-1 text-base text-gray-900 dark:text-gray-100 prose dark:prose-invert max-w-none">
                                    {!! nl2br(e($aboutSection->getTranslation('description', 'en'))) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Arabic Content -->
                    <div id="content-ar" class="language-content hidden">
                        <div class="mb-6">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">{{ __('Arabic Content') }}</h3>
                            <div class="mb-4">
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('Title') }}</p>
                                <p class="mt-1 text-base text-gray-900 dark:text-gray-100 text-right">{{ $aboutSection->getTranslation('title', 'ar') }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('Description') }}</p>
                                <div class="mt-1 text-base text-gray-900 dark:text-gray-100 prose dark:prose-invert max-w-none text-right">
                                    {!! nl2br(e($aboutSection->getTranslation('description', 'ar'))) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image -->
                    @if($aboutSection->image)
                        <div class="mt-8">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">{{ __('Image') }}</h3>
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $aboutSection->image) }}" alt="{{ $aboutSection->title }}" class="max-w-full h-auto rounded-lg shadow-md">
                            </div>
                        </div>
                    @endif
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