@extends('layouts.admin')

@section('header')
    <div class="flex items-center">
        <svg class="w-6 h-6 mr-2 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
        </svg>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit About Section') }}
        </h2>
    </div>
@endsection

@section('content')
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideInFromLeft {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes slideInFromRight {
            from { opacity: 0; transform: translateX(20px); }
            to { opacity: 1; transform: translateX(0); }
        }

        .animate-fadeIn {
            animation: fadeIn 0.5s ease-out forwards;
        }

        .animate-slideInLeft {
            animation: slideInFromLeft 0.5s ease-out forwards;
        }

        .animate-slideInRight {
            animation: slideInFromRight 0.5s ease-out forwards;
        }

        .staggered-item:nth-child(1) { animation-delay: 0.1s; }
        .staggered-item:nth-child(2) { animation-delay: 0.2s; }
        .staggered-item:nth-child(3) { animation-delay: 0.3s; }
        .staggered-item:nth-child(4) { animation-delay: 0.4s; }
        .staggered-item:nth-child(5) { animation-delay: 0.5s; }
        .staggered-item:nth-child(6) { animation-delay: 0.6s; }
        .staggered-item:nth-child(7) { animation-delay: 0.7s; }
        .staggered-item:nth-child(8) { animation-delay: 0.8s; }

        .form-card {
            background: linear-gradient(145deg, #ffffff, #f8fafc);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            border: 1px solid rgba(229, 231, 235, 0.7);
        }

        .dark .form-card {
            background: linear-gradient(145deg, #1f2937, #111827);
            border: 1px solid rgba(55, 65, 81, 0.7);
        }

        .section-header {
            background: linear-gradient(to right, #3b82f6, #60a5fa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .tab-active {
            background: linear-gradient(to right, #eff6ff, #dbeafe);
            border-radius: 0.5rem 0.5rem 0 0;
        }

        .dark .tab-active {
            background: linear-gradient(to right, #1e3a8a, #1e40af);
        }

        .form-input, .form-textarea, .form-select {
            transition: all 0.3s ease;
        }

        .form-input:focus, .form-textarea:focus, .form-select:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3);
        }

        .btn-primary {
            background: linear-gradient(to right, #3b82f6, #2563eb);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #2563eb, #1d4ed8);
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.3);
        }

        .btn-secondary {
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .image-preview {
            transition: all 0.3s ease;
        }

        .image-preview:hover {
            transform: scale(1.02);
        }
    </style>

    <div class="container mx-auto py-6 px-4">
        <div class="max-w-4xl mx-auto">
            <div class="form-card rounded-xl shadow-lg overflow-hidden opacity-0 animate-fadeIn">
                <div class="p-6 sm:p-8">
                    <form action="{{ route('admin.about-sections.update', $aboutSection) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Section Header -->
                        <div class="mb-8 pb-6 border-b border-gray-200 dark:border-gray-700">
                            <h3 class="text-2xl font-bold section-header flex items-center">
                                <svg class="w-6 h-6 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                                {{ __('Section Details') }}
                            </h3>
                            <p class="mt-2 text-gray-600 dark:text-gray-400">
                                {{ __('Update the content and settings for this about section') }}
                            </p>
                        </div>

                        <!-- Section Name -->
                        <div class="mb-8 staggered-item opacity-0 animate-slideInLeft">
                            <label for="section_name" class="block text-lg font-medium text-gray-800 dark:text-gray-200 mb-3">
                                {{ __('Section Name') }}
                                <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="h-6 w-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                </div>
                                <input type="text" name="section_name" id="section_name"
                                       class="form-input w-full pl-12 py-4 text-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out rounded-lg shadow-sm border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white"
                                       value="{{ old('section_name', $aboutSection->section_name) }}" required placeholder="{{ __('Enter section name') }}">
                            </div>
                            <p class="mt-3 text-sm text-gray-500 dark:text-gray-400 flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                {{ __('A unique identifier for this section (e.g. hero, story, vision)') }}
                            </p>
                            @error('section_name')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400 flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Language Tabs -->
                        <div class="mb-8 staggered-item opacity-0 animate-slideInRight">
                            <div class="flex border-b border-gray-200 dark:border-gray-700 mb-6">
                                <button type="button" onclick="switchTab('en')" id="tab-en"
                                        class="py-3 px-6 font-medium text-lg flex items-center transition-all duration-300">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                                    </svg>
                                    English
                                </button>
                                <button type="button" onclick="switchTab('ar')" id="tab-ar"
                                        class="py-3 px-6 font-medium text-lg flex items-center transition-all duration-300 ml-2">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                                    </svg>
                                    العربية
                                </button>
                            </div>
                        </div>

                        <!-- English Fields -->
                        <div id="content-en" class="language-content staggered-item opacity-0 animate-slideInLeft">
                            <div class="mb-8">
                                <label for="title_en" class="block text-lg font-medium text-gray-800 dark:text-gray-200 mb-3">
                                    {{ __('Title (English)') }}
                                    <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <svg class="h-6 w-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                        </svg>
                                    </div>
                                    <input type="text" name="title[en]" id="title_en"
                                           class="form-input w-full pl-12 py-4 text-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out rounded-lg shadow-sm border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white"
                                           value="{{ old('title.en', $aboutSection->getTranslation('title', 'en')) }}" required placeholder="{{ __('Enter title in English') }}">
                                </div>
                                @error('title.en')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-400 flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="mb-8">
                                <label for="description_en" class="block text-lg font-medium text-gray-800 dark:text-gray-200 mb-3">
                                    {{ __('Description (English)') }}
                                    <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <div class="absolute top-4 left-0 pl-4 flex items-start pointer-events-none">
                                        <svg class="h-6 w-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
                                        </svg>
                                    </div>
                                    <textarea name="description[en]" id="description_en" rows="5"
                                              class="form-textarea w-full pl-12 py-4 text-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out rounded-lg shadow-sm border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white"
                                              placeholder="{{ __('Enter description in English') }}">{{ old('description.en', $aboutSection->getTranslation('description', 'en')) }}</textarea>
                                </div>
                                @error('description.en')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-400 flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <!-- Arabic Fields -->
                        <div id="content-ar" class="language-content hidden staggered-item opacity-0 animate-slideInRight">
                            <div class="mb-8">
                                <label for="title_ar" class="block text-lg font-medium text-gray-800 dark:text-gray-200 mb-3">
                                    {{ __('Title (Arabic)') }}
                                    <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <svg class="h-6 w-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                        </svg>
                                    </div>
                                    <input type="text" name="title[ar]" id="title_ar" dir="rtl"
                                           class="form-input w-full pl-12 py-4 text-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out rounded-lg shadow-sm border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white"
                                           value="{{ old('title.ar', $aboutSection->getTranslation('title', 'ar')) }}" required placeholder="{{ __('Enter title in Arabic') }}">
                                </div>
                                @error('title.ar')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-400 flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="mb-8">
                                <label for="description_ar" class="block text-lg font-medium text-gray-800 dark:text-gray-200 mb-3">
                                    {{ __('Description (Arabic)') }}
                                    <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <div class="absolute top-4 left-0 pl-4 flex items-start pointer-events-none">
                                        <svg class="h-6 w-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
                                        </svg>
                                    </div>
                                    <textarea name="description[ar]" id="description_ar" rows="5" dir="rtl"
                                              class="form-textarea w-full pl-12 py-4 text-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out rounded-lg shadow-sm border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white"
                                              placeholder="{{ __('Enter description in Arabic') }}">{{ old('description.ar', $aboutSection->getTranslation('description', 'ar')) }}</textarea>
                                </div>
                                @error('description.ar')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-400 flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <!-- Content Section -->
                        <div class="mb-8 pb-6 border-b border-gray-200 dark:border-gray-700 staggered-item opacity-0 animate-slideInLeft">
                            <h3 class="text-2xl font-bold section-header flex items-center">
                                <svg class="w-6 h-6 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                {{ __('Media & Settings') }}
                            </h3>
                        </div>

                        <!-- Image Upload -->
                        <div class="mb-8 staggered-item opacity-0 animate-slideInRight">
                            <label for="image" class="block text-lg font-medium text-gray-800 dark:text-gray-200 mb-3">
                                {{ __('Image') }}
                            </label>
                            <div class="mt-1 flex justify-center px-6 pt-8 pb-8 border-2 border-gray-300 dark:border-gray-600 border-dashed rounded-xl transition duration-150 ease-in-out hover:border-blue-400 bg-gray-50 dark:bg-gray-800">
                                <div class="space-y-3 text-center">
                                    <svg class="mx-auto h-16 w-16 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-lg text-gray-600 dark:text-gray-300">
                                        <label for="image" class="relative cursor-pointer bg-white dark:bg-gray-800 rounded-md font-medium text-blue-600 dark:text-blue-400 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                            <span class="text-lg">{{ __('Upload a file') }}</span>
                                            <input id="image" name="image" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-2">{{ __('or drag and drop') }}</p>
                                    </div>
                                    <p class="text-base text-gray-500 dark:text-gray-400">
                                        {{ __('PNG, JPG, GIF up to 2MB') }}
                                    </p>
                                </div>
                            </div>

                            @if($aboutSection->image)
                                <div class="mt-6 p-6 bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-gray-700 dark:to-gray-800 rounded-xl shadow-inner">
                                    <p class="text-lg font-medium text-gray-800 dark:text-gray-200 flex items-center mb-4">
                                        <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        {{ __('Current Image:') }}
                                    </p>
                                    <div class="flex flex-col sm:flex-row items-start sm:items-center">
                                        <img src="{{ asset('storage/' . $aboutSection->image) }}" alt="{{ $aboutSection->title }}" class="h-32 w-auto object-cover rounded-xl shadow-lg image-preview">
                                        <div class="mt-4 sm:mt-0 sm:ml-6">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="remove_image" class="form-checkbox rounded text-blue-600 shadow-sm focus:ring-blue-500 h-5 w-5">
                                                <span class="ml-3 text-base font-medium text-red-600 dark:text-red-400">{{ __('Remove current image') }}</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @error('image')
                                <p class="mt-3 text-base text-red-600 dark:text-red-400 flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Sort Order -->
                        <div class="mb-8 staggered-item opacity-0 animate-slideInLeft">
                            <label for="sort_order" class="block text-lg font-medium text-gray-800 dark:text-gray-200 mb-3">
                                {{ __('Sort Order') }}
                                <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="h-6 w-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h9m5-4v12m0 0l-4-4m4 4l4-4"></path>
                                    </svg>
                                </div>
                                <input type="number" name="sort_order" id="sort_order"
                                       class="form-input w-full pl-12 py-4 text-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out rounded-lg shadow-sm border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white"
                                       value="{{ old('sort_order', $aboutSection->sort_order) }}" required placeholder="{{ __('Enter sort order') }}">
                            </div>
                            @error('sort_order')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400 flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Active Status -->
                        <div class="mb-10 staggered-item opacity-0 animate-slideInRight">
                            <label class="flex items-center p-4 bg-gradient-to-r from-green-50 to-emerald-50 dark:from-gray-700 dark:to-gray-800 rounded-xl">
                                <input type="checkbox" name="is_active"
                                       class="form-checkbox rounded text-blue-600 shadow-sm focus:ring-blue-500 h-6 w-6"
                                       {{ old('is_active', $aboutSection->is_active) ? 'checked' : '' }}>
                                <span class="ml-4 text-lg font-medium text-gray-800 dark:text-gray-200">{{ __('Active') }}</span>
                                <span class="ml-3 text-base text-gray-600 dark:text-gray-400">{{ __('(Uncheck to hide this section on the website)') }}</span>
                            </label>
                        </div>

                        <!-- Form Actions -->
                        <div class="flex flex-col sm:flex-row items-center justify-between pt-8 border-t border-gray-200 dark:border-gray-700 staggered-item opacity-0 animate-slideInLeft">
                            <a href="{{ route('admin.about-sections.index') }}"
                               class="btn-secondary w-full sm:w-auto mb-4 sm:mb-0 inline-flex items-center justify-center px-6 py-4 border border-gray-300 dark:border-gray-600 text-lg font-medium rounded-xl text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>
                                {{ __('Cancel') }}
                            </a>
                            <button type="submit"
                                    class="btn-primary w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 border border-transparent text-lg font-bold rounded-xl shadow-lg text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                {{ __('Update Section') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialize animations
        document.addEventListener('DOMContentLoaded', function() {
            // Animate items sequentially
            document.querySelectorAll('.staggered-item').forEach((item, index) => {
                setTimeout(() => {
                    item.style.opacity = '1';
                }, index * 100);
            });

            // Set initial tab state
            document.getElementById('tab-en').classList.add('tab-active');
        });

        function switchTab(lang) {
            // Hide all content divs
            document.querySelectorAll('.language-content').forEach(div => {
                div.classList.add('hidden');
            });

            // Show the selected content div
            document.getElementById(`content-${lang}`).classList.remove('hidden');

            // Update tab styling
            document.querySelectorAll('[id^="tab-"]').forEach(tab => {
                tab.classList.remove('tab-active');
            });

            document.getElementById(`tab-${lang}`).classList.add('tab-active');
        }
    </script>
@endsection
