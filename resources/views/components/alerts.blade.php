@if(session('success'))
    <div class="rounded-lg bg-green-50 p-4 border border-green-200 mb-6 flex items-start gap-3">
        <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <div>
            <h3 class="text-sm font-medium text-green-800">{{ __('app.success') }}</h3>
            <div class="mt-1 text-sm text-green-700">{{ session('success') }}</div>
        </div>
    </div>
@endif

@if(session('error'))
    <div class="rounded-lg bg-red-50 p-4 border border-red-200 mb-6 flex items-start gap-3">
        <svg class="w-5 h-5 text-red-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <div>
            <h3 class="text-sm font-medium text-red-800">{{ __('app.error') }}</h3>
            <div class="mt-1 text-sm text-red-700">{{ session('error') }}</div>
        </div>
    </div>
@endif

@if ($errors->any())
    <div class="rounded-lg bg-red-50 p-4 border border-red-200 mb-6">
        <div class="flex items-start gap-3">
            <svg class="w-5 h-5 text-red-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
                 <h3 class="text-sm font-medium text-red-800">{{ __('app.error') }}</h3>
                <ul class="mt-2 text-sm text-red-700 list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
