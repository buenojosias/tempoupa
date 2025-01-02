<div class="sticky top-0 mb-4">
    <div class="p-4 shadow bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
        @if ($slot)
            {{ $slot }}
        @else
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <a href="/" class="text-gray-900 dark:text-white text-2xl font-bold">Tempo UPA</a>
            </div>
            <div>
                <a href="/login" class="text-gray-900 dark:text-white">Login</a>
                <a href="/register" class="text-gray-900 dark:text-white">Register</a>
            </div>
        </div>
        @endif
    </div>
    {{-- <x-ts-button x-on:click="darkTheme = !darkTheme">Light / Dark Mode</x-ts-button> --}}
</div>
