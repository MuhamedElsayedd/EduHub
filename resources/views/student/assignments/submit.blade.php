@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen py-12">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-8">
            <a href="{{ url('/courses/1/learn') }}" class="flex items-center gap-2 text-gray-500 hover:text-blue-600 transition-colors mb-4">
                <svg class="w-4 h-4 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Back to Lesson
            </a>
            <h1 class="text-3xl font-bold text-gray-900">{{ __('app.assignment_submission') }}</h1>
            <p class="text-gray-600 mt-2">Build a Personal Portfolio Website</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-8">
                <div class="bg-blue-50 border border-blue-100 rounded-xl p-4 mb-8 flex gap-4">
                    <div class="bg-blue-100 p-2 rounded-lg h-fit text-blue-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-blue-900 mb-1">Instructions</h4>
                        <p class="text-sm text-blue-800 leading-relaxed">
                            Create a responsive personal portfolio website using HTML5 and CSS3. 
                            Ensure it includes a header, about section, projects gallery, and a contact form.
                            Upload your source code as a ZIP file.
                        </p>
                        <div class="mt-3 flex items-center gap-4 text-xs font-semibold text-blue-700">
                            <span>{{ __('app.due_date') }}: Oct 15, 2024</span>
                            <span class="w-1 h-1 bg-blue-400 rounded-full"></span>
                            <span>Points: 100</span>
                        </div>
                    </div>
                </div>

                <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('app.upload_file') }} (ZIP, PDF, DOCX)</label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-xl hover:bg-gray-50 hover:border-blue-400 transition-all cursor-pointer group">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400 group-hover:text-blue-500 transition-colors" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600 justify-center">
                                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                        <span>Upload a file</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">
                                    ZIP, PDF, DOCX up to 10MB
                                </p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="comments" class="block text-sm font-medium text-gray-700 mb-2">{{ __('app.feedback') }} / Comments (Optional)</label>
                        <textarea id="comments" name="comments" rows="3" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-xl p-3" placeholder="Add any notes for the instructor..."></textarea>
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors shadow-blue-200">
                            {{ __('app.submit_assignment') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
