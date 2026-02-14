@extends('layouts.app')

@section('content')
<div class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-8 gap-4">
            <h1 class="text-3xl font-bold text-gray-900">{{ __('app.courses') }}</h1>
            <div class="w-full md:w-auto">
                 <div class="relative">
                    <input type="text" placeholder="{{ __('app.search_courses') }}" class="w-full md:w-80 pl-10 pr-4 py-2.5 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none transition-all rtl:pr-10 rtl:pl-4">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3 rtl:right-3 rtl:left-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Sidebar Filters -->
            <div class="lg:col-span-1 space-y-6">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="font-bold text-gray-900 mb-4">{{ __('app.filter_category') }}</h3>
                    <div class="space-y-3">
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 border-gray-300 h-4 w-4">
                            <span class="text-gray-700 group-hover:text-blue-600 transition-colors text-sm">Design (12)</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 border-gray-300 h-4 w-4">
                            <span class="text-gray-700 group-hover:text-blue-600 transition-colors text-sm">Development (24)</span>
                        </label>
                         <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 border-gray-300 h-4 w-4">
                            <span class="text-gray-700 group-hover:text-blue-600 transition-colors text-sm">Business (8)</span>
                        </label>
                         <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500 border-gray-300 h-4 w-4">
                            <span class="text-gray-700 group-hover:text-blue-600 transition-colors text-sm">Marketing (5)</span>
                        </label>
                    </div>
                </div>

                 <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="font-bold text-gray-900 mb-4">{{ __('app.all_levels') }}</h3>
                    <div class="space-y-3">
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="radio" name="level" class="text-blue-600 focus:ring-blue-500 border-gray-300 h-4 w-4">
                            <span class="text-gray-700 group-hover:text-blue-600 transition-colors text-sm">{{ __('app.all_levels') }}</span>
                        </label>
                         <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="radio" name="level" class="text-blue-600 focus:ring-blue-500 border-gray-300 h-4 w-4">
                            <span class="text-gray-700 group-hover:text-blue-600 transition-colors text-sm">{{ __('app.beginner') }}</span>
                        </label>
                         <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="radio" name="level" class="text-blue-600 focus:ring-blue-500 border-gray-300 h-4 w-4">
                            <span class="text-gray-700 group-hover:text-blue-600 transition-colors text-sm">{{ __('app.intermediate') }}</span>
                        </label>
                         <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="radio" name="level" class="text-blue-600 focus:ring-blue-500 border-gray-300 h-4 w-4">
                            <span class="text-gray-700 group-hover:text-blue-600 transition-colors text-sm">{{ __('app.advanced') }}</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Course Grid -->
            <div class="lg:col-span-3">
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    <!-- Repeated cards for demo -->
                    @for($i = 1; $i <= 6; $i++)
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-300 border border-gray-100 overflow-hidden flex flex-col group">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Course" class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-500">
                             <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <span class="absolute bottom-3 left-3 text-white font-bold text-lg rtl:right-3 rtl:left-auto">$49.99</span>
                        </div>
                        <div class="p-5 flex-1 flex flex-col">
                            <h3 class="text-lg font-bold text-gray-900 mb-2 leading-snug hover:text-blue-600 transition-colors">
                                <a href="{{ url('/courses/1') }}">Complete Web Development Bootcamp 2024</a>
                            </h3>
                            <div class="flex items-center gap-2 mb-4 text-sm text-gray-500">
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    24h 30m
                                </span>
                                <span class="text-gray-300">|</span>
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                    1.2k {{ __('app.students') }}
                                </span>
                            </div>
                            
                            <div class="mt-auto">
                                <a href="{{ url('/courses/1') }}" class="block w-full text-center bg-blue-50 text-blue-600 font-semibold py-2 rounded-lg hover:bg-blue-600 hover:text-white transition-colors">
                                    {{ __('app.enroll_now') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>

                <!-- Pagination Mockup -->
                <div class="mt-12 flex justify-center">
                    <nav class="flex gap-2">
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50">
                            <svg class="w-4 h-4 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg bg-blue-600 text-white font-bold shadow-md shadow-blue-200">1</a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium">2</a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium">3</a>
                        <span class="w-10 h-10 flex items-end justify-center pb-2 text-gray-400">...</span>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50">
                            <svg class="w-4 h-4 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
