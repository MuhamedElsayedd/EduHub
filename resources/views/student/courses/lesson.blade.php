@extends('layouts.app')

@section('content')
<div class="bg-gray-900 min-h-screen text-gray-100 flex flex-col lg:flex-row">
    
    <!-- Sidebar / Playlist -->
    <div class="w-full lg:w-96 bg-gray-800 border-r border-gray-700 flex-shrink-0 lg:h-screen lg:overflow-y-auto order-2 lg:order-1">
        <div class="p-6 border-b border-gray-700">
            <h2 class="font-bold text-lg text-white mb-2">Complete Web Development Bootcamp</h2>
            <div class="w-full bg-gray-700 rounded-full h-2">
                <div class="bg-green-500 h-2 rounded-full" style="width: 35%"></div>
            </div>
            <p class="text-xs text-gray-400 mt-2">35% {{ __('app.completed') }}</p>
        </div>

        <div class="divide-y divide-gray-700">
            <!-- Current Lesson -->
            <a href="#" class="block p-4 bg-blue-900/20 border-l-4 border-blue-500 hover:bg-gray-700 transition-colors">
                 <div class="flex items-start gap-3">
                    <div class="mt-1 text-blue-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" /></svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-white mb-1">1. Introduction to HTML</p>
                        <p class="text-xs text-gray-400">12:30</p>
                    </div>
                </div>
            </a>

            <!-- Completed Lesson -->
            <a href="#" class="block p-4 hover:bg-gray-700 transition-colors relative">
                 <div class="absolute right-4 top-4 text-green-500 rtl:right-auto rtl:left-4">
                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                 </div>
                 <div class="flex items-start gap-3 opacity-60">
                    <div class="mt-1 text-gray-500">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" /></svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-white mb-1">2. Basic Structures</p>
                        <p class="text-xs text-gray-400">08:45</p>
                    </div>
                </div>
            </a>

            <!-- Upcoming Lesson -->
            <a href="#" class="block p-4 hover:bg-gray-700 transition-colors">
                 <div class="flex items-start gap-3">
                    <div class="mt-1 text-gray-400">
                         <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-white mb-1">3. Forms and Inputs</p>
                        <p class="text-xs text-gray-400">15:20</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col order-1 lg:order-2">
        <!-- Video Player -->
        <div class="bg-black relative aspect-video w-full flex items-center justify-center group">
            <!-- Mock Video Player -->
            <div class="absolute inset-0 bg-gray-900 bg-opacity-50 group-hover:bg-opacity-30 transition-all flex items-center justify-center cursor-pointer">
                 <svg class="w-20 h-20 text-white bg-blue-600 rounded-full p-4 shadow-lg hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 20 20"><path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" /></svg>
            </div>
            <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80" alt="Video Thumbnail" class="w-full h-full object-cover opacity-50">
        </div>

        <!-- Lesson Meta & Controls -->
        <div class="flex-1 bg-gray-50 p-6 lg:p-8">
            <div class="max-w-4xl mx-auto">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900 mb-2">Introduction to HTML</h1>
                        <p class="text-gray-500">Lesson 1 of 42</p>
                    </div>
                    
                    <div class="flex items-center gap-3 w-full md:w-auto">
                        <button class="flex-1 md:flex-none px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-100 font-medium transition-colors">
                             {{ __('app.prev_lesson') }}
                        </button>
                        <button class="flex-1 md:flex-none px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 shadow-md transition-colors font-medium">
                            {{ __('app.next_lesson') }}
                        </button>
                    </div>
                </div>

                <!-- Tabs -->
                <div class="border-b border-gray-200 mb-6">
                    <nav class="flex gap-8" aria-label="Tabs">
                        <a href="#" class="border-b-2 border-blue-500 py-4 px-1 text-sm font-medium text-blue-600">
                             {{ __('app.resources') }}
                        </a>
                        <a href="#" class="border-b-2 border-transparent py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                             {{ __('app.discussion') }}
                        </a>
                         <a href="#" class="border-b-2 border-transparent py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                             Transcript
                        </a>
                    </nav>
                </div>

                <!-- Tab Content -->
                <div class="prose max-w-none text-gray-600">
                    <p class="mb-4">In this lesson, we will cover the basic structure of an HTML document. You will learn about tags, elements, and attributes.</p>
                    <h3 class="text-gray-900 font-bold text-lg mb-2">Downloadable Resources</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex items-center gap-2 text-blue-600 hover:underline">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                Slide Deck (PDF)
                            </a>
                        </li>
                         <li>
                            <a href="#" class="flex items-center gap-2 text-blue-600 hover:underline">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                Source Code (ZIP)
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
