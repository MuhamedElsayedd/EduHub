@extends('layouts.app')

@section('content')
<div class="bg-gray-50 pb-20">
    
    <!-- User Header -->
    <div class="bg-white border-b border-gray-200 mb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="flex flex-col md:flex-row items-center gap-6">
                 <img class="h-24 w-24 rounded-full border-4 border-white shadow-lg object-cover" src="https://ui-avatars.com/api/?name=User&background=random" alt="User">
                 <div class="text-center md:rtl:text-right md:ltr:text-left">
                     <h1 class="text-3xl font-bold text-gray-900 mb-2">Ahmed Ali</h1>
                     <p class="text-gray-500 mb-4">{{ __('app.students') }} • Joined Jan 2024</p>
                     <div class="flex items-center gap-2 justify-center md:justify-start">
                         <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide">Premium plan</span>
                         <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide">Verified</span>
                     </div>
                 </div>
                 <div class="md:ml-auto md:rtl:ml-0 md:rtl:mr-auto flex gap-4">
                     <a href="{{ url('/profile') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 font-medium hover:bg-gray-50 transition-colors bg-white shadow-sm">
                         {{ __('app.edit_profile') }}
                     </a>
                 </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
             <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
                 <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                     <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                 </div>
                 <div>
                     <div class="text-2xl font-bold text-gray-900">4</div>
                     <div class="text-sm text-gray-500">{{ __('app.in_progress') }}</div>
                 </div>
             </div>
             
              <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
                 <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                     <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                 </div>
                 <div>
                     <div class="text-2xl font-bold text-gray-900">12</div>
                     <div class="text-sm text-gray-500">{{ __('app.completed_courses') }}</div>
                 </div>
             </div>

              <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
                 <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-600">
                     <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                 </div>
                 <div>
                     <div class="text-2xl font-bold text-gray-900">8</div>
                     <div class="text-sm text-gray-500">{{ __('app.certificates') }}</div>
                 </div>
             </div>
        </div>

        <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-2">
            <span class="w-1 h-6 bg-blue-600 rounded-full"></span>
            {{ __('app.my_learning') }}
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Progress Card 1 -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow overflow-hidden">
                <div class="flex p-4 gap-4">
                     <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" class="w-24 h-24 rounded-lg object-cover" alt="Course">
                     <div class="flex-1">
                         <h3 class="font-bold text-gray-900 mb-2 line-clamp-2">Laravel 10 for Beginners</h3>
                         <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
                             <div class="bg-blue-600 h-2 rounded-full" style="width: 45%"></div>
                         </div>
                         <div class="flex justify-between items-center text-xs text-gray-500">
                             <span>45% {{ __('app.completed') }}</span>
                             <span>12/40 Lessons</span>
                         </div>
                     </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 border-t border-gray-100 flex justify-end">
                    <a href="{{ url('/courses/1/learn') }}" class="text-sm font-semibold text-blue-600 hover:text-blue-800 flex items-center gap-1">
                        {{ __('app.resume_course') }}
                        <svg class="w-4 h-4 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                    </a>
                </div>
            </div>

            <!-- Progress Card 2 -->
             <div class="bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow overflow-hidden">
                <div class="flex p-4 gap-4">
                     <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" class="w-24 h-24 rounded-lg object-cover" alt="Course">
                     <div class="flex-1">
                         <h3 class="font-bold text-gray-900 mb-2 line-clamp-2">UI/UX Design Fundamentals</h3>
                         <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
                             <div class="bg-purple-500 h-2 rounded-full" style="width: 10%"></div>
                         </div>
                         <div class="flex justify-between items-center text-xs text-gray-500">
                             <span>10% {{ __('app.completed') }}</span>
                             <span>2/20 Lessons</span>
                         </div>
                     </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 border-t border-gray-100 flex justify-end">
                    <a href="{{ url('/courses/2/learn') }}" class="text-sm font-semibold text-purple-600 hover:text-purple-800 flex items-center gap-1">
                        {{ __('app.resume_course') }}
                         <svg class="w-4 h-4 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
