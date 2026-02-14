@extends('layouts.app')

@section('content')
<!-- Filter backgroud for header -->
<div class="bg-gray-900 text-white py-12 md:py-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center filter blur-sm"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/80 to-transparent"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="lg:w-2/3">
             <div class="flex items-center gap-2 mb-4 text-sm font-medium text-blue-400">
                <span class="bg-blue-500/20 px-3 py-1 rounded-full text-blue-300">Development</span>
                <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                <span>Last updated Nov 2024</span>
            </div>
            <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">Complete Web Development Bootcamp 2024</h1>
            <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                Become a full-stack web developer with just one course. HTML, CSS, Javascript, Node, React, MongoDB, Web3 and DApps.
            </p>
            
            <div class="flex flex-wrap items-center gap-6 mb-8 text-sm md:text-base">
                <div class="flex items-center gap-2 text-yellow-500">
                    <span class="font-bold text-lg">4.8</span>
                    <div class="flex">
                        @for($i=0; $i<5; $i++)
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        @endfor
                    </div>
                    <span class="text-gray-400 underline">(1,245 {{ __('app.reviews') }})</span>
                </div>
                 <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    <span>12,500 {{ __('app.students') }}</span>
                </div>
            </div>
            
            <div class="flex items-center gap-3">
                 <img src="https://ui-avatars.com/api/?name=J+D&background=random" class="w-10 h-10 rounded-full border-2 border-gray-700" alt="Instructor">
                 <div>
                    <p class="text-sm text-gray-400">{{ __('app.instructor') }}</p>
                    <p class="font-medium text-white">John Doe</p>
                 </div>
            </div>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
        
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-12">
            
            <!-- What you'll learn -->
            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">{{ __('app.what_you_learn') }}</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700">Build fully responsive websites</span>
                    </div>
                     <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700">Lear React JS from scratch</span>
                    </div>
                     <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700">Backend development with Node</span>
                    </div>
                     <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700">Master CSS Flexbox and Grid</span>
                    </div>
                </div>
            </div>

            <!-- Course Content -->
            <div>
                 <h2 class="text-2xl font-bold text-gray-900 mb-6">{{ __('app.course_content') }}</h2>
                 <div class="border border-gray-200 rounded-xl overflow-hidden divide-y divide-gray-200 bg-white" x-data="{ active: 1 }">
                     
                     <!-- Section 1 -->
                     <div>
                         <button @click="active === 1 ? active = null : active = 1" class="w-full flex items-center justify-between p-4 bg-gray-50 hover:bg-gray-100 transition-colors">
                             <div class="flex items-center gap-3">
                                 <svg class="w-5 h-5 text-gray-500 transform transition-transform" :class="{'rotate-180': active === 1}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                 <span class="font-bold text-gray-800">Introduction to Web Development</span>
                             </div>
                             <span class="text-sm text-gray-500">3 {{ __('app.lectures') }} • 15min</span>
                         </button>
                         <div x-show="active === 1" x-collapse style="display: none;">
                             <div class="p-4 space-y-3">
                                 <div class="flex items-center justify-between text-sm group cursor-pointer hover:bg-blue-50 p-2 rounded-lg transition-colors">
                                     <div class="flex items-center gap-3 text-gray-700">
                                         <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" /></svg>
                                         <span class="group-hover:text-blue-700">Welcome to the course</span>
                                     </div>
                                     <span class="text-gray-400">05:00</span>
                                 </div>
                                  <div class="flex items-center justify-between text-sm group cursor-pointer hover:bg-blue-50 p-2 rounded-lg transition-colors">
                                     <div class="flex items-center gap-3 text-gray-700">
                                         <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                         <span class="group-hover:text-blue-700">How the internet works</span>
                                     </div>
                                     <span class="text-gray-400">Text</span>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <!-- Section 2 -->
                     <div>
                         <button @click="active === 2 ? active = null : active = 2" class="w-full flex items-center justify-between p-4 bg-gray-50 hover:bg-gray-100 transition-colors">
                             <div class="flex items-center gap-3">
                                  <svg class="w-5 h-5 text-gray-500 transform transition-transform" :class="{'rotate-180': active === 2}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                 <span class="font-bold text-gray-800">HTML 5 Mastery</span>
                             </div>
                             <span class="text-sm text-gray-500">5 {{ __('app.lectures') }} • 45min</span>
                         </button>
                         <div x-show="active === 2" x-collapse style="display: none;">
                              <div class="p-4 space-y-3">
                                 <div class="flex items-center justify-between text-sm group cursor-pointer hover:bg-blue-50 p-2 rounded-lg transition-colors">
                                     <div class="flex items-center gap-3 text-gray-700">
                                         <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" /></svg>
                                         <span class="group-hover:text-blue-700">HTML Tags Structure</span>
                                     </div>
                                     <span class="text-gray-400">10:00</span>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
            </div>

        </div>

        <!-- Sidebar -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 sticky top-24">
                <div class="text-3xl font-bold text-gray-900 mb-2">$49.99</div>
                <div class="text-sm text-gray-500 line-through mb-6">$89.99</div>
                
                <a href="{{ url('/courses/1/learn') }}" class="block w-full bg-blue-600 hover:bg-blue-700 text-white font-bold text-center py-3.5 rounded-xl shadow-lg shadow-blue-200 transition-all transform hover:-translate-y-1 mb-4">
                    {{ __('app.enroll_now') }}
                </a>
                
                <p class="text-center text-xs text-gray-500 mb-6">30-Day Money-Back Guarantee</p>
                
                <h4 class="font-bold text-gray-900 mb-4 text-sm">{{ __('app.course_content') }}</h4>
                <div class="space-y-3 text-sm text-gray-600">
                    <div class="flex items-center justify-between border-b border-gray-100 pb-2">
                        <span class="flex items-center gap-2">
                             <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                             {{ __('app.duration') }}
                        </span>
                        <span class="font-medium text-gray-900">24h 30m</span>
                    </div>
                     <div class="flex items-center justify-between border-b border-gray-100 pb-2">
                        <span class="flex items-center gap-2">
                             <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                             {{ __('app.lectures') }}
                        </span>
                        <span class="font-medium text-gray-900">42</span>
                    </div>
                     <div class="flex items-center justify-between pb-2">
                        <span class="flex items-center gap-2">
                             <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                             {{ __('app.resources') }}
                        </span>
                        <span class="font-medium text-gray-900">15</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
