<x-mobile-layout>
    <div class="container">
        <div class="content">
            <div class="title">Laravel 5</div>
            <div class="quote">Hello, Laravel 5!</div>
        </div>
    </div>
    @for ($i = 0; $i < 20; $i++)
        <div class="p-2">
            <h1 class="text-2xl font-bold">Hello, Vite {{ $i }}!</h1>
            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod
                voluptates. Quisquam, quod voluptates.</p>
        </div>
    @endfor
</x-mobile-layout>
