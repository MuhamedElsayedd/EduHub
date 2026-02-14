@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <h1 class="text-3xl font-bold text-gray-900 mb-8">{{ __('app.profile') }}</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Sidebar Navigation -->
            <div class="md:col-span-1 space-y-4">
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-6 text-center border-b border-gray-100">
                        <div class="relative inline-block">
                             <img class="h-24 w-24 rounded-full border-4 border-white shadow-lg object-cover mx-auto mb-4" src="https://ui-avatars.com/api/?name=User&background=random" alt="User">
                             <button class="absolute bottom-0 right-0 bg-blue-600 text-white p-2 rounded-full shadow-md hover:bg-blue-700 transition-colors rtl:left-0 rtl:right-auto">
                                 <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                             </button>
                        </div>
                        <h3 class="font-bold text-gray-900 text-lg">Ahmed Ali</h3>
                        <p class="text-sm text-gray-500">student@nahj.com</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <nav class="flex flex-col">
                        <a href="#" class="px-6 py-4 text-sm font-medium text-blue-600 bg-blue-50 border-l-4 border-blue-600 rtl:border-l-0 rtl:border-r-4">
                            general Settings
                        </a>
                        <a href="#" class="px-6 py-4 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900 border-l-4 border-transparent rtl:border-l-0 rtl:border-r-4 transition-colors">
                            Password & Security
                        </a>
                         <a href="#" class="px-6 py-4 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900 border-l-4 border-transparent rtl:border-l-0 rtl:border-r-4 transition-colors">
                            Notifications
                        </a>
                        <a href="#" class="px-6 py-4 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900 border-l-4 border-transparent rtl:border-l-0 rtl:border-r-4 transition-colors">
                            Billing
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Main Content -->
            <div class="md:col-span-2">
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                    <h2 class="text-xl font-bold text-gray-900 mb-6">{{ __('app.edit_profile') }}</h2>
                    
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">{{ __('app.full_name') }}</label>
                                <input type="text" name="name" id="name" value="Ahmed Ali" class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm transition-colors py-2.5">
                            </div>

                             <div>
                                <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                                <input type="text" name="username" id="username" value="ahmedali99" class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm transition-colors py-2.5">
                            </div>

                            <div class="md:col-span-2">
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">{{ __('app.email') }}</label>
                                <input type="email" name="email" id="email" value="student@nahj.com" class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm transition-colors py-2.5">
                            </div>

                            <div class="md:col-span-2">
                                <label for="bio" class="block text-sm font-medium text-gray-700 mb-1">Bio</label>
                                <textarea id="bio" name="bio" rows="4" class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm transition-colors py-2.5" placeholder="Tell us a little about yourself..."></textarea>
                            </div>
                        </div>

                        <div class="pt-6 border-t border-gray-100 flex justify-end">
                            <button type="button" class="bg-white py-2.5 px-6 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mr-3 rtl:mr-0 rtl:ml-3">
                                {{ __('app.cancel') }}
                            </button>
                            <button type="submit" class="bg-blue-600 py-2.5 px-6 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 shadow-blue-200">
                                {{ __('app.save_changes') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
