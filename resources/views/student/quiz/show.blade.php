@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-2xl font-bold text-gray-900">{{ __('app.quiz_title') }}: HTML Basics</h1>
            <div class="text-sm font-medium text-gray-500">Page 1 of 5</div>
        </div>

        <!-- Progress Bar -->
        <div class="w-full bg-gray-200 rounded-full h-2.5 mb-8">
            <div class="bg-blue-600 h-2.5 rounded-full transition-all duration-500" style="width: 20%"></div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-8">
                <span class="text-blue-600 font-bold text-sm tracking-wide uppercase mb-2 block">{{ __('app.question') }} 1</span>
                <h2 class="text-xl font-bold text-gray-900 mb-6">Which HTML element is used to define the title of a document?</h2>
                
                <div class="space-y-4">
                    <label class="flex items-center p-4 border-2 border-gray-100 rounded-xl cursor-pointer hover:bg-blue-50 hover:border-blue-200 transition-all group">
                        <input type="radio" name="q1" class="text-blue-600 focus:ring-blue-500 border-gray-300 h-5 w-5" name="answer">
                        <span class="ml-3 rtl:mr-3 rtl:ml-0 font-medium text-gray-700 group-hover:text-blue-700">&lt;head&gt;</span>
                    </label>

                    <label class="flex items-center p-4 border-2 border-gray-100 rounded-xl cursor-pointer hover:bg-blue-50 hover:border-blue-200 transition-all group">
                        <input type="radio" name="q1" class="text-blue-600 focus:ring-blue-500 border-gray-300 h-5 w-5" name="answer">
                        <span class="ml-3 rtl:mr-3 rtl:ml-0 font-medium text-gray-700 group-hover:text-blue-700">&lt;title&gt;</span>
                    </label>

                    <label class="flex items-center p-4 border-2 border-gray-100 rounded-xl cursor-pointer hover:bg-blue-50 hover:border-blue-200 transition-all group">
                        <input type="radio" name="q1" class="text-blue-600 focus:ring-blue-500 border-gray-300 h-5 w-5" name="answer">
                        <span class="ml-3 rtl:mr-3 rtl:ml-0 font-medium text-gray-700 group-hover:text-blue-700">&lt;meta&gt;</span>
                    </label>

                     <label class="flex items-center p-4 border-2 border-gray-100 rounded-xl cursor-pointer hover:bg-blue-50 hover:border-blue-200 transition-all group">
                        <input type="radio" name="q1" class="text-blue-600 focus:ring-blue-500 border-gray-300 h-5 w-5" name="answer">
                        <span class="ml-3 rtl:mr-3 rtl:ml-0 font-medium text-gray-700 group-hover:text-blue-700">&lt;link&gt;</span>
                    </label>
                </div>
            </div>
            
            <div class="bg-gray-50 px-8 py-5 border-t border-gray-100 flex justify-between items-center">
                 <button class="text-gray-500 hover:text-gray-700 font-medium px-4 py-2 hover:bg-gray-100 rounded-lg transition-colors">
                     Back
                 </button>
                 <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2.5 px-6 rounded-lg shadow-md shadow-blue-200 transition-transform transform hover:-translate-y-0.5">
                     Next Question
                 </button>
            </div>
        </div>

    </div>
</div>
@endsection
