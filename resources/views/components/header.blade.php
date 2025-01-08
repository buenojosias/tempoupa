<div class="sticky top-0 mb-4 z-50">
    <div class="p-4 shadow bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
        {{-- @if ($slot)
            {{ $slot }}
        @else --}}
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <a href="/" class="text-gray-900 dark:text-white text-2xl font-bold">
                    <img src="{{ asset('img/logo-header-color.png') }}" alt="Tempo UPA" class="h-4">
                </a>
            </div>
            <div>
                {{-- <a href="/login" class="text-gray-900 dark:text-white">Login</a>
                <a href="/register" class="text-gray-900 dark:text-white">Register</a> --}}
            </div>
        </div>
        {{-- @endif --}}
    </div>
    {{-- <x-ts-button x-on:click="darkTheme = !darkTheme">Light / Dark Mode</x-ts-button> --}}
</div>
