<nav class="fixed w-full z-50 transition-all duration-300 md:bg-white/80 md:backdrop-blur-md border-b border-gray-100/50" x-data="{ mobileMenuOpen: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)" :class="{ 'bg-white shadow-sm': scrolled, 'bg-transparent': !scrolled && !mobileMenuOpen, 'bg-white': mobileMenuOpen }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            
            <!-- Logo & Desktop Nav -->
            <div class="flex items-center gap-12">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                        <div class="w-10 h-10 shadow-lg shadow-blue-500/30 group-hover:scale-105 transition-transform duration-300">
                            <img src="{{ asset('favicon.svg') }}" alt="Nahj Logo" class="w-full h-full object-cover rounded-xl">
                        </div>
                        <span class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-gray-700">Nahj</span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex md:items-center md:gap-8">
                    <a href="{{ url('/') }}" class="text-gray-600 hover:text-blue-600 font-medium transition-all hover:-translate-y-0.5 {{ request()->is('/') ? 'text-blue-600 font-semibold' : '' }}">
                        {{ __('app.home') }}
                    </a>
                    <a href="{{ url('/courses') }}" class="text-gray-600 hover:text-blue-600 font-medium transition-all hover:-translate-y-0.5 {{ request()->is('courses*') ? 'text-blue-600 font-semibold' : '' }}">
                        {{ __('app.courses') }}
                    </a>
                </div>
            </div>

            <!-- Right Side (Search, Auth, Lang) -->
            <div class="hidden md:flex md:items-center md:gap-6">
                <!-- Search Bar -->
                <div class="relative hidden lg:block group">
                    <input type="text" placeholder="{{ __('app.search_courses') }}" class="w-64 pl-10 pr-4 py-2 bg-gray-50/50 border border-gray-100 rounded-full focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none text-sm transition-all rtl:pr-10 rtl:pl-4 placeholder-gray-400 text-gray-700">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5 rtl:right-3 rtl:left-auto group-focus-within:text-blue-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>

                <div class="h-6 w-px bg-gray-200"></div>

                @include('components.language-switcher')

                @auth
                    <!-- User Dropdown -->
                    <div class="relative ml-3" x-data="{ open: false }">
                        <button @click="open = !open" @click.away="open = false" class="flex items-center gap-3 focus:outline-none p-1 pr-3 rounded-full hover:bg-gray-50 transition-colors border border-transparent hover:border-gray-100">
                            <img class="h-9 w-9 rounded-full border-2 border-white shadow-sm object-cover" src="https://ui-avatars.com/api/?name=User&background=random" alt="">
                            <div class="hidden lg:block text-start">
                                <p class="text-sm font-semibold text-gray-800 leading-tight">Ahmed Ali</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400 transition-transform duration-200" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        
                        <div x-show="open" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 translate-y-2"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-2"
                             class="absolute z-50 mt-2 w-56 bg-white rounded-2xl shadow-xl ring-1 ring-black ring-opacity-5 py-2 focus:outline-none ltr:origin-top-right rtl:origin-top-left ltr:right-0 rtl:left-0"
                             style="display: none;">
                             
                             <div class="px-4 py-3 border-b border-gray-50 mb-1">
                                <p class="text-sm text-gray-500">Signed in as</p>
                                <p class="text-sm font-semibold text-gray-900 truncate">student@nahj.com</p>
                             </div>

                            <a href="{{ url('/dashboard') }}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-blue-600 transition-colors">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                {{ __('app.dashboard') }}
                            </a>
                            <a href="{{ url('/profile') }}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-blue-600 transition-colors">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                {{ __('app.profile') }}
                            </a>
                            
                            <div class="border-t border-gray-100 my-1"></div>
                            
                            <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-sm text-red-600 hover:bg-red-50 hover:text-red-700 transition-colors">
                                <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                {{ __('app.logout') }}
                            </a>
                        </div>
                    </div>
                @else
                    <div class="flex items-center gap-4">
                        <a href="{{ url('/login') }}" class="text-gray-600 hover:text-blue-600 font-medium transition-colors">{{ __('app.login') }}</a>
                        <a href="{{ url('/register') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-full font-medium shadow-lg shadow-blue-500/30 transition-all hover:-translate-y-0.5 hover:shadow-blue-500/40">
                            {{ __('app.register') }}
                        </a>
                    </div>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <div class="flex items-center md:hidden gap-4">
                @include('components.language-switcher')
                
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="inline-flex items-center justify-center p-2 rounded-lg text-gray-500 hover:text-blue-600 hover:bg-blue-50 focus:outline-none transition-all">
                    <svg class="h-6 w-6" x-show="!mobileMenuOpen" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6" x-show="mobileMenuOpen" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden bg-white/95 backdrop-blur-xl border-t border-gray-100" 
         style="display: none;">
         
        <div class="px-4 pt-4 pb-6 space-y-2">
            <a href="{{ url('/') }}" class="block px-4 py-3 rounded-xl text-base font-medium {{ request()->is('/') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:bg-gray-50' }}">
                {{ __('app.home') }}
            </a>
            <a href="{{ url('/courses') }}" class="block px-4 py-3 rounded-xl text-base font-medium {{ request()->is('courses*') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:bg-gray-50' }}">
                {{ __('app.courses') }}
            </a>
        </div>
        
        <div class="border-t border-gray-100 px-4 py-6">
            @auth
                <div class="flex items-center gap-4 mb-6">
                    <img class="h-12 w-12 rounded-full border-2 border-white shadow-md" src="https://ui-avatars.com/api/?name=User&background=random" alt="">
                    <div>
                        <div class="text-base font-bold text-gray-900">Ahmed Ali</div>
                        <div class="text-xs font-medium text-gray-500">student@nahj.com</div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <a href="{{ url('/dashboard') }}" class="flex justify-center py-3 bg-gray-50 rounded-xl text-sm font-medium text-gray-700 hover:bg-gray-100">{{ __('app.dashboard') }}</a>
                    <a href="{{ url('/profile') }}" class="flex justify-center py-3 bg-gray-50 rounded-xl text-sm font-medium text-gray-700 hover:bg-gray-100">{{ __('app.profile') }}</a>
                    <a href="#" class="col-span-2 flex justify-center py-3 bg-red-50 rounded-xl text-sm font-medium text-red-600 hover:bg-red-100">{{ __('app.logout') }}</a>
                </div>
            @else
                <div class="space-y-3">
                    <a href="{{ url('/login') }}" class="block w-full text-center px-4 py-3 border border-gray-200 rounded-xl text-base font-medium text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                        {{ __('app.login') }}
                    </a>
                    <a href="{{ url('/register') }}" class="block w-full text-center px-4 py-3 border border-transparent rounded-xl text-base font-bold text-white bg-blue-600 hover:bg-blue-700 shadow-lg shadow-blue-500/30 transition-transform hover:-translate-y-0.5">
                        {{ __('app.register') }}
                    </a>
                </div>
            @endauth
        </div>
    </div>
</nav>
