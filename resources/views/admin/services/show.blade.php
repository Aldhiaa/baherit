@extends('layouts.admin')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Service Details') }}
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
                    
                    <!-- English Content -->
                    <div id="content-en" class="tab-content">
                        <div class="mb-6">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">{{ __('Title (English)') }}</h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-300">{{ $service->title['en'] ?? '' }}</p>
                        </div>
                        
                        <div class="mb-6">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">{{ __('Description (English)') }}</h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-300">{{ $service->description['en'] ?? '' }}</p>
                        </div>
                    </div>
                    
                    <!-- Arabic Content -->
                    <div id="content-ar" class="tab-content hidden">
                        <div class="mb-6">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">{{ __('Title (Arabic)') }}</h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-300">{{ $service->title['ar'] ?? '' }}</p>
                        </div>
                        
                        <div class="mb-6">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">{{ __('Description (Arabic)') }}</h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-300">{{ $service->description['ar'] ?? '' }}</p>
                        </div>
                    </div>
                    
                    <!-- Common Fields -->
                    <div class="mt-6">
                        <div class="mb-6">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">{{ __('Category') }}</h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-300">{{ $service->category }}</p>
                        </div>
                        
                        @if($service->icon)
                            <div class="mb-6">
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white">{{ __('Icon') }}</h3>
                                <p class="mt-1 text-gray-600 dark:text-gray-300">{{ $service->icon }}</p>
                            </div>
                        @endif
                        
                        @if($service->features && count($service->features) > 0)
                            <div class="mb-6">
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white">{{ __('Features') }}</h3>
                                <ul class="mt-1 list-disc list-inside text-gray-600 dark:text-gray-300">
                                    @foreach($service->features as $feature)
                                        <li>{{ $feature }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        @if($service->timeline)
                            <div class="mb-6">
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white">{{ __('Timeline') }}</h3>
                                <p class="mt-1 text-gray-600 dark:text-gray-300">{{ $service->timeline }}</p>
                            </div>
                        @endif
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <a href="{{ route('admin.services.index') }}" 
                           class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            {{ __('Back') }}
                        </a>
                        <div>
                            <a href="{{ route('admin.services.edit', $service) }}" 
                               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
                                {{ __('Edit') }}
                            </a>
                            <form action="{{ route('admin.services.destroy', $service) }}" 
                                  method="POST" 
                                  class="inline-block"
                                  onsubmit="return confirm('{{ __('Are you sure you want to delete this service?') }}');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                    {{ __('Delete') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection