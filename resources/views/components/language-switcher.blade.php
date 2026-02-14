@php
    $currentLocale = app()->getLocale();
    $languages = [
        'en' => ['name' => 'English', 'flag' => '🇺🇸', 'dir' => 'ltr'],
        'ar' => ['name' => 'العربية', 'flag' => '🇸🇦', 'dir' => 'rtl']
    ];
@endphp

<div class="relative group" x-data="{ open: false }">
    <button @click="open = !open" @click.away="open = false" class="flex items-center gap-2 text-gray-600 hover:text-blue-600 font-medium focus:outline-none transition-colors duration-200">
        <span class="text-xl">{{ $languages[$currentLocale]['flag'] }}</span>
        <span class="hidden md:inline">{{ $currentLocale === 'en' ? 'EN' : 'العربية' }}</span>
        <svg class="w-4 h-4 transition-transform duration-200" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
    </button>

    <div x-show="open"
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="absolute z-50 mt-2 w-32 rounded-xl shadow-lg bg-white ring-1 ring-black ring-opacity-5 py-1 focus:outline-none ltr:origin-top-right rtl:origin-top-left ltr:right-0 rtl:left-0"
         style="display: none;">
        @foreach($languages as $code => $details)
            <a href="{{ url()->current() }}?lang={{ $code }}"
               class="flex items-center gap-3 px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-blue-600 {{ $currentLocale === $code ? 'bg-blue-50 text-blue-700' : '' }}">
                <span class="text-lg">{{ $details['flag'] }}</span>
                <span class="font-medium">{{ $details['name'] }}</span>
            </a>
        @endforeach
    </div>
</div>
