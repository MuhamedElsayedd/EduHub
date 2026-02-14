@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-[#F8FAFC] via-[#EFF6FF] to-[#E0E7FF] overflow-hidden pt-20">
        <!-- Abstract Shapes -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
             <div class="absolute top-[-10%] left-[-5%] w-[500px] h-[500px] bg-blue-400/10 rounded-full blur-[100px]"></div>
             <div class="absolute bottom-[-10%] right-[-5%] w-[600px] h-[600px] bg-indigo-500/10 rounded-full blur-[120px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-24 md:pt-32 md:pb-40 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20 items-center">
                
                <!-- Content -->
                <div class="text-center md:rtl:text-right md:ltr:text-left animate-fade-in-up">
                    <div class="inline-block px-4 py-1.5 rounded-full bg-blue-100/50 text-blue-600 font-semibold text-sm mb-6 border border-blue-200/50 backdrop-blur-sm">
                        🚀 #1 Learning Platform in MENA
                    </div>
                    <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-8 leading-[1.2] text-gray-900">
                        {{ __('app.welcome_title') }} <br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Faster & Better.</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 mb-10 max-w-lg mx-auto md:mx-0 leading-relaxed">
                        {{ __('app.welcome_subtitle') }}
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                        <a href="{{ url('/courses') }}" class="group bg-blue-600 text-white font-semibold px-8 py-4 rounded-2xl shadow-xl shadow-blue-500/20 hover:bg-blue-700 transition-all transform hover:-translate-y-1 flex items-center justify-center gap-2">
                            {{ __('app.start_learning') }}
                            <svg class="w-5 h-5 rtl:rotate-180 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                        <a href="#featured" class="bg-white text-gray-700 border border-gray-200 font-semibold px-8 py-4 rounded-2xl hover:bg-gray-50 hover:border-gray-300 transition-all transform hover:-translate-y-1 shadow-sm text-center">
                            {{ __('app.view_all_courses') }}
                        </a>
                    </div>

                    <!-- Trust Badges -->
                    <div class="mt-12 flex items-center gap-6 justify-center md:justify-start grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                         <div class="h-8 w-24 bg-gray-200 rounded animate-pulse"></div>
                         <div class="h-8 w-24 bg-gray-200 rounded animate-pulse"></div>
                         <div class="h-8 w-24 bg-gray-200 rounded animate-pulse"></div>
                    </div>
                </div>

                <!-- Hero Image / Illustration -->
                <div class="relative hidden md:block rtl:mr-10 ltr:ml-10">
                    <div class="relative z-10 transform hover:scale-[1.02] transition-transform duration-700">
                         <img src="https://illustrations.popsy.co/amber/student-going-to-school.svg" alt="Education" class="w-full h-auto drop-shadow-2xl">
                    </div>
                    
                    <!-- Floating Cards -->
                    <div class="absolute -top-10 -right-10 bg-white p-4 rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.1)] animate-bounce-slow z-20 rtl:right-auto rtl:-left-10">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 font-medium">Course Completed</p>
                                <p class="text-sm font-bold text-gray-800">HTML & CSS Mastery</p>
                            </div>
                        </div>
                    </div>

                     <div class="absolute bottom-10 -left-10 bg-white p-4 rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.1)] animate-bounce-slow-delay z-20 rtl:left-auto rtl:-right-10">
                        <div class="flex items-center gap-3">
                            <div class="flex -space-x-2">
                                <img class="w-8 h-8 rounded-full border-2 border-white" src="https://ui-avatars.com/api/?name=A" alt="">
                                <img class="w-8 h-8 rounded-full border-2 border-white" src="https://ui-avatars.com/api/?name=B" alt="">
                                <img class="w-8 h-8 rounded-full border-2 border-white" src="https://ui-avatars.com/api/?name=C" alt="">
                            </div>
                            <div>
                                <p class="text-sm font-bold text-gray-800">10k+ Students</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Wave Separator -->
        <div class="absolute bottom-0 left-0 w-full text-white">
            <svg class="w-full h-12 md:h-24 fill-current" viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#ffffff" fill-opacity="1" d="M0,224L60,213.3C120,203,240,181,360,181.3C480,181,600,203,720,224C840,245,960,267,1080,261.3C1200,256,1320,224,1380,208L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
            </svg>
        </div>
    </div>
      <!-- 1. Discover Curricula Section -->
        <div class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-4">{{ __('app.discover_curricula') }}</h2>
                <p class="text-gray-500 mb-12 max-w-2xl mx-auto">{{ __('app.curricula_subtitle') }}</p>
                
                <div class="grid grid-cols-2 md:grid-cols-5 gap-6">
                    <a href="#" class="group bg-white border border-gray-100 rounded-2xl p-6 hover:shadow-xl hover:shadow-blue-500/10 hover:border-blue-100 transition-all duration-300 flex flex-col items-center gap-4 hover:-translate-y-1">
                        <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 group-hover:scale-110 transition-transform duration-300">
                             <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        </div>
                        <span class="font-bold text-gray-800 group-hover:text-blue-600 transition-colors">{{ __('app.university') }}</span>
                    </a>
                     <a href="#" class="group bg-white border border-gray-100 rounded-2xl p-6 hover:shadow-xl hover:shadow-green-500/10 hover:border-green-100 transition-all duration-300 flex flex-col items-center gap-4 hover:-translate-y-1">
                        <div class="w-16 h-16 bg-green-50 rounded-2xl flex items-center justify-center text-green-600 group-hover:scale-110 transition-transform duration-300">
                             <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                         <span class="font-bold text-gray-800 group-hover:text-green-600 transition-colors">{{ __('app.high_school') }}</span>
                    </a>
                     <a href="#" class="group bg-white border border-gray-100 rounded-2xl p-6 hover:shadow-xl hover:shadow-yellow-500/10 hover:border-yellow-100 transition-all duration-300 flex flex-col items-center gap-4 hover:-translate-y-1">
                        <div class="w-16 h-16 bg-yellow-50 rounded-2xl flex items-center justify-center text-yellow-600 group-hover:scale-110 transition-transform duration-300">
                             <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        </div>
                         <span class="font-bold text-gray-800 group-hover:text-yellow-600 transition-colors">{{ __('app.middle_school') }}</span>
                    </a>
                     <a href="#" class="group bg-white border border-gray-100 rounded-2xl p-6 hover:shadow-xl hover:shadow-purple-500/10 hover:border-purple-100 transition-all duration-300 flex flex-col items-center gap-4 hover:-translate-y-1">
                         <div class="w-16 h-16 bg-purple-50 rounded-2xl flex items-center justify-center text-purple-600 group-hover:scale-110 transition-transform duration-300">
                             <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                         <span class="font-bold text-gray-800 group-hover:text-purple-600 transition-colors">{{ __('app.primary_school') }}</span>
                    </a>
                    <a href="#" class="group bg-gray-50 border border-gray-100 rounded-2xl p-6 hover:shadow-xl hover:bg-gray-100 transition-all duration-300 flex flex-col items-center gap-4 hover:-translate-y-1 justify-center">
                         <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center text-gray-400 group-hover:text-blue-600 shadow-sm transition-colors duration-300">
                             <svg class="w-6 h-6 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </div>
                         <span class="font-bold text-gray-600 group-hover:text-blue-600 transition-colors">{{ __('app.view_all_courses') }}</span>
                    </a>
                </div>
            </div>
        </div>

         <!-- 2. How it Works Section -->
        <div class="py-24 bg-white relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                 <div class="text-center mb-16">
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-4">{{ __('app.how_it_works') }}</h2>
                    <p class="text-gray-500 max-w-2xl mx-auto">{{ __('app.how_it_works_subtitle') }}</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                     <!-- Steps -->
                     <div class="space-y-8 relative">
                         <!-- Vertical Line -->
                         <div class="absolute top-8 bottom-8 left-8 rtl:left-auto rtl:right-8 w-0.5 bg-gray-100 hidden md:block"></div>

                         <div class="relative flex gap-6 group">
                              <div class="w-16 h-16 rounded-2xl bg-white border border-gray-100 shadow-sm flex items-center justify-center text-2xl font-bold text-blue-600 relative z-10 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">1</div>
                              <div>
                                  <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">{{ __('app.step_1_title') }}</h3>
                                  <p class="text-gray-500">{{ __('app.step_1_desc') }}</p>
                              </div>
                         </div>
                         <div class="relative flex gap-6 group">
                              <div class="w-16 h-16 rounded-2xl bg-white border border-gray-100 shadow-sm flex items-center justify-center text-2xl font-bold text-gray-400 relative z-10 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">2</div>
                              <div>
                                  <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">{{ __('app.step_2_title') }}</h3>
                                  <p class="text-gray-500">{{ __('app.step_2_desc') }}</p>
                              </div>
                         </div>
                         <div class="relative flex gap-6 group">
                              <div class="w-16 h-16 rounded-2xl bg-white border border-gray-100 shadow-sm flex items-center justify-center text-2xl font-bold text-gray-400 relative z-10 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">3</div>
                              <div>
                                  <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">{{ __('app.step_3_title') }}</h3>
                                  <p class="text-gray-500">{{ __('app.step_3_desc') }}</p>
                              </div>
                         </div>
                          <div class="relative flex gap-6 group">
                              <div class="w-16 h-16 rounded-2xl bg-white border border-gray-100 shadow-sm flex items-center justify-center text-2xl font-bold text-gray-400 relative z-10 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">4</div>
                              <div>
                                  <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">{{ __('app.step_4_title') }}</h3>
                                  <p class="text-gray-500">{{ __('app.step_4_desc') }}</p>
                              </div>
                         </div>
                     </div>

                     <!-- Image/Logo Area -->
                     <div class="relative flex justify-center items-center">
                         <div class="absolute inset-0 bg-gradient-to-tr from-green-400/20 to-blue-500/20 rounded-full blur-3xl animate-pulse"></div>
                         <div class="bg-gradient-to-br from-green-400 to-blue-500 p-1 rounded-[2.5rem] shadow-2xl transform rotate-3 hover:rotate-0 transition-transform duration-500">
                             <div class="bg-white rounded-[2.3rem] p-12 text-center h-[400px] w-[320px] flex flex-col items-center justify-center gap-6 relative overflow-hidden">
                                  <div class="absolute top-0 right-0 w-32 h-32 bg-yellow-100 rounded-bl-[100px] -mr-8 -mt-8 opacity-50"></div>
                                  <div class="absolute bottom-0 left-0 w-32 h-32 bg-blue-100 rounded-tr-[100px] -ml-8 -mb-8 opacity-50"></div>
                                  
                                  <div class="w-24 h-24 bg-gradient-to-tr from-blue-600 to-green-500 rounded-2xl flex items-center justify-center text-white text-4xl shadow-lg mb-2">
                                     <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                  </div>
                                  <h3 class="text-2xl font-bold text-gray-900">منصة نهج</h3>
                                  <p class="text-gray-500 font-medium">Nahj Platform</p>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    <!-- Featured Courses Section -->
    <div id="featured" class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                 <div>
                     <p class="text-blue-600 font-bold uppercase tracking-wide text-sm mb-2">{{ __('app.explore') }}</p>
                     <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                        {{ __('app.featured_courses') }}
                    </h2>
                 </div>
                <a href="{{ url('/courses') }}" class="group flex items-center gap-2 text-gray-600 font-semibold hover:text-blue-600 transition-colors">
                    {{ __('app.view_all_courses') }}
                    <span class="bg-gray-100 rounded-full p-1 group-hover:bg-blue-100 transition-colors">
                         <svg class="w-4 h-4 rtl:rotate-180 transition-transform group-hover:translate-x-1" fill="none" user-select="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Premium Course Card 1 -->
                <div class="group relative bg-white rounded-3xl shadow-sm hover:shadow-[0_20px_50px_rgba(0,0,0,0.08)] transition-all duration-300 border border-gray-100 flex flex-col h-full hover:-translate-y-2">
                    <div class="relative m-2 overflow-hidden rounded-2xl">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Course" class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <span class="absolute top-3 right-3 bg-white/95 backdrop-blur-sm text-gray-800 text-xs font-bold px-3 py-1.5 rounded-lg shadow-sm rtl:left-3 rtl:right-auto">
                            {{ __('app.intermediate') }}
                        </span>
                    </div>
                    
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-blue-600 bg-blue-50 px-2 py-1 rounded-md">
                                Programming
                            </div>
                            <div class="flex items-center text-amber-500 text-sm font-bold gap-1">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                4.8
                            </div>
                        </div>

                        <h3 class="text-xl font-bold text-gray-900 mb-3 leading-snug group-hover:text-blue-600 transition-colors">
                            <a href="{{ url('/courses/1') }}">Laravel 10 for Beginners</a>
                        </h3>
                        
                        <div class="flex items-center gap-4 text-sm text-gray-500 mb-6">
                            <div class="flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                24h 30m
                            </div>
                            <div class="w-1 h-1 rounded-full bg-gray-300"></div>
                            <div class="flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                42 Lessons
                            </div>
                        </div>
                        
                        <div class="mt-auto pt-5 border-t border-gray-100 flex items-center justify-between">
                             <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=John+Doe&background=0D8ABC&color=fff" class="w-9 h-9 rounded-full ring-2 ring-white shadow-sm" alt="Instructor">
                                <div>
                                    <p class="text-xs text-gray-400 font-medium">Instructor</p>
                                    <p class="text-sm font-bold text-gray-800">John Doe</p>
                                </div>
                            </div>
                            <div class="text-xl font-bold text-blue-600">$49.99</div>
                        </div>
                    </div>
                </div>

                <!-- Premium Course Card 2 -->
                 <div class="group relative bg-white rounded-3xl shadow-sm hover:shadow-[0_20px_50px_rgba(0,0,0,0.08)] transition-all duration-300 border border-gray-100 flex flex-col h-full hover:-translate-y-2">
                    <div class="relative m-2 overflow-hidden rounded-2xl">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Course" class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <span class="absolute top-3 right-3 bg-white/95 backdrop-blur-sm text-gray-800 text-xs font-bold px-3 py-1.5 rounded-lg shadow-sm rtl:left-3 rtl:right-auto">
                            {{ __('app.beginner') }}
                        </span>
                    </div>
                    
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex items-center justify-between mb-4">
                             <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-purple-600 bg-purple-50 px-2 py-1 rounded-md">
                                Design
                            </div>
                            <div class="flex items-center text-amber-500 text-sm font-bold gap-1">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                4.9
                            </div>
                        </div>

                        <h3 class="text-xl font-bold text-gray-900 mb-3 leading-snug group-hover:text-blue-600 transition-colors">
                            <a href="{{ url('/courses/2') }}">UI/UX Design Fundamentals</a>
                        </h3>
                        
                        <div class="flex items-center gap-4 text-sm text-gray-500 mb-6">
                            <div class="flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                18h 15m
                            </div>
                            <div class="w-1 h-1 rounded-full bg-gray-300"></div>
                            <div class="flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                32 Lessons
                            </div>
                        </div>
                        
                         <div class="mt-auto pt-5 border-t border-gray-100 flex items-center justify-between">
                             <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=Sarah+Smith&background=EB4D4B&color=fff" class="w-9 h-9 rounded-full ring-2 ring-white shadow-sm" alt="Instructor">
                                <div>
                                    <p class="text-xs text-gray-400 font-medium">Instructor</p>
                                    <p class="text-sm font-bold text-gray-800">Sarah Smith</p>
                                </div>
                            </div>
                            <div class="text-xl font-bold text-blue-600">$39.99</div>
                        </div>
                    </div>
                </div>

                <!-- Premium Course Card 3 -->
                  <div class="group relative bg-white rounded-3xl shadow-sm hover:shadow-[0_20px_50px_rgba(0,0,0,0.08)] transition-all duration-300 border border-gray-100 flex flex-col h-full hover:-translate-y-2">
                    <div class="relative m-2 overflow-hidden rounded-2xl">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Course" class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <span class="absolute top-3 right-3 bg-white/95 backdrop-blur-sm text-gray-800 text-xs font-bold px-3 py-1.5 rounded-lg shadow-sm rtl:left-3 rtl:right-auto">
                            {{ __('app.advanced') }}
                        </span>
                    </div>
                    
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex items-center justify-between mb-4">
                             <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-green-600 bg-green-50 px-2 py-1 rounded-md">
                                Marketing
                            </div>
                            <div class="flex items-center text-amber-500 text-sm font-bold gap-1">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                4.7
                            </div>
                        </div>

                        <h3 class="text-xl font-bold text-gray-900 mb-3 leading-snug group-hover:text-blue-600 transition-colors">
                            <a href="{{ url('/courses/3') }}">Digital Marketing 101</a>
                        </h3>
                        
                        <div class="flex items-center gap-4 text-sm text-gray-500 mb-6">
                            <div class="flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                12h 45m
                            </div>
                            <div class="w-1 h-1 rounded-full bg-gray-300"></div>
                            <div class="flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                28 Lessons
                            </div>
                        </div>
                        
                         <div class="mt-auto pt-5 border-t border-gray-100 flex items-center justify-between">
                             <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=Mike+Ross&background=F0932B&color=fff" class="w-9 h-9 rounded-full ring-2 ring-white shadow-sm" alt="Instructor">
                                <div>
                                    <p class="text-xs text-gray-400 font-medium">Instructor</p>
                                    <p class="text-sm font-bold text-gray-800">Mike Ross</p>
                                </div>
                            </div>
                            <div class="text-xl font-bold text-blue-600">$29.99</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        .animate-bounce-slow { animation: bounce 3s infinite; }
        .animate-bounce-slow-delay { animation: bounce 3s infinite; animation-delay: 1.5s; }
        @keyframes bounce {
            0%, 100% { transform: translateY(-5%); }
            50% { transform: translateY(0); }
        }
    </style>
    <!-- Abstract Shapes Wrapper for Background Continuity -->
    <div class="relative overflow-hidden">
       
        <!-- 4. Features (Why Choose Us) Section -->
        <div class="py-20 bg-[#F3EFE9]">
             <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div class="flex flex-col items-center gap-4 group">
                        <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform duration-300">
                             <svg class="w-10 h-10 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                        </div>
                        <h4 class="font-bold text-gray-800">{{ __('app.flexibility') }}</h4>
                    </div>
                     <div class="flex flex-col items-center gap-4 group">
                        <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform duration-300">
                             <svg class="w-10 h-10 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        </div>
                        <h4 class="font-bold text-gray-800">{{ __('app.safety') }}</h4>
                    </div>
                     <div class="flex flex-col items-center gap-4 group">
                        <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform duration-300">
                             <svg class="w-10 h-10 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                        </div>
                        <h4 class="font-bold text-gray-800">{{ __('app.collaboration') }}</h4>
                    </div>
                     <div class="flex flex-col items-center gap-4 group">
                        <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform duration-300">
                             <svg class="w-10 h-10 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </div>
                        <h4 class="font-bold text-gray-800">{{ __('app.lifelong_learning') }}</h4>
                    </div>
                </div>
             </div>
        </div>

        <!-- 5. FAQ Section -->
        <div class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                    <!-- Illustration -->
                    <div class="hidden lg:block">
                        <img src="https://illustrations.popsy.co/amber/question-mark.svg" alt="FAQ" class="w-full h-auto drop-shadow-2xl">
                    </div>

                    <!-- Accordion -->
                    <div x-data="{ selected: null }">
                        <h2 class="text-3xl font-extrabold text-gray-900 mb-2">{{ __('app.how_we_help') }}</h2>
                        <p class="text-gray-500 mb-10">{{ __('app.faq_subtitle') }}</p>
                        
                        <div class="space-y-4">
                            <!-- Item 1 -->
                            <div class="border border-gray-100 rounded-2xl overflow-hidden">
                                <button @click="selected !== 1 ? selected = 1 : selected = null" class="w-full flex justify-between items-center p-5 bg-white hover:bg-gray-50 transition-colors text-right rtl:text-right ltr:text-left">
                                    <span class="font-bold text-gray-800">{{ __('app.faq_q1') }}</span>
                                    <svg class="w-5 h-5 text-gray-400 transform transition-transform duration-300" :class="{'rotate-180': selected === 1}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>
                                <div x-show="selected === 1" x-collapse>
                                    <div class="p-5 pt-0 text-gray-600 leading-relaxed border-t border-gray-100">
                                        {{ __('app.faq_a1') }}
                                    </div>
                                </div>
                            </div>
                             <!-- Item 2 -->
                            <div class="border border-gray-100 rounded-2xl overflow-hidden">
                                <button @click="selected !== 2 ? selected = 2 : selected = null" class="w-full flex justify-between items-center p-5 bg-white hover:bg-gray-50 transition-colors text-right rtl:text-right ltr:text-left">
                                    <span class="font-bold text-gray-800">{{ __('app.faq_q2') }}</span>
                                    <svg class="w-5 h-5 text-gray-400 transform transition-transform duration-300" :class="{'rotate-180': selected === 2}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>
                                <div x-show="selected === 2" x-collapse>
                                    <div class="p-5 pt-0 text-gray-600 leading-relaxed border-t border-gray-100">
                                        {{ __('app.faq_a2') }}
                                    </div>
                                </div>
                            </div>
                             <!-- Item 3 -->
                            <div class="border border-gray-100 rounded-2xl overflow-hidden">
                                <button @click="selected !== 3 ? selected = 3 : selected = null" class="w-full flex justify-between items-center p-5 bg-white hover:bg-gray-50 transition-colors text-right rtl:text-right ltr:text-left">
                                    <span class="font-bold text-gray-800">{{ __('app.faq_q3') }}</span>
                                    <svg class="w-5 h-5 text-gray-400 transform transition-transform duration-300" :class="{'rotate-180': selected === 3}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>
                                <div x-show="selected === 3" x-collapse>
                                    <div class="p-5 pt-0 text-gray-600 leading-relaxed border-t border-gray-100">
                                        {{ __('app.faq_a3') }}
                                    </div>
                                </div>
                            </div>
                             <!-- Item 4 -->
                            <div class="border border-gray-100 rounded-2xl overflow-hidden">
                                <button @click="selected !== 4 ? selected = 4 : selected = null" class="w-full flex justify-between items-center p-5 bg-white hover:bg-gray-50 transition-colors text-right rtl:text-right ltr:text-left">
                                    <span class="font-bold text-gray-800">{{ __('app.faq_q4') }}</span>
                                    <svg class="w-5 h-5 text-gray-400 transform transition-transform duration-300" :class="{'rotate-180': selected === 4}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>
                                <div x-show="selected === 4" x-collapse>
                                    <div class="p-5 pt-0 text-gray-600 leading-relaxed border-t border-gray-100">
                                        {{ __('app.faq_a4') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <!-- 3. Testimonial Section -->
        <div class="py-24 bg-[#FAF9F6]">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <div class="text-6xl text-amber-400 font-serif mb-6 opacity-50">“</div>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 leading-relaxed mb-10">
                    "أنا فخور بكوني مدرساً على منصة نهج. المنصة توفر بيئة تعليمية مبتكرة تتيح لي تقديم المحتوى بشكل فعال وسهل الوصول. التواصل المستمر مع الطلاب يعزز من تجربتي التدريسية بشكل كبير."
                </h3>
                <div class="flex items-center justify-center gap-4">
                     <img src="https://ui-avatars.com/api/?name=Ahmed+Hassan&background=0D8ABC&color=fff&size=128" alt="Instructor" class="w-16 h-16 rounded-full border-4 border-white shadow-lg">
                     <div class="text-right rtl:text-right ltr:text-left">
                         <div class="font-bold text-gray-900">أحمد حسن</div>
                         <div class="text-sm text-gray-500">مدرس رياضيات</div>
                     </div>
                </div>
            </div>
        </div>

    </div>

@endsection
