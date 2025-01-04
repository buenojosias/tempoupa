<div>
    <!-- Swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <div class="overflow-hidden mt-2">
        <div class="swiper-container px-4">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-secondary-400 text-gray-50 rounded-md">
                    <div class="flex h-28 py-4 px-2 space-x-1.5">
                        <x-ts-icon name="map-pin" class="h-8 w-8 text-gray-100/40" />
                        <div class="space-y-1 pt-1">
                            <h3 class="text-md">Unidade mais próxima</h3>
                            @if ($nearestClinic)
                                <p class="text-lg font-semibold">{{ $nearestClinic->type . ' ' . $nearestClinic->name }}
                                </p>
                            @else
                                Carregando...
                            @endif
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-primary-400 text-gray-50 rounded-md">
                    <div class="flex h-28 py-4 px-2 space-x-1.5">
                        <x-ts-icon name="clock" class="h-8 w-8 text-gray-100/40" />
                        <div class="space-y-1 pt-1">
                            <h3 class="text-md">Unidade com menor tempo</h3>
                            <p class="text-lg font-semibold">{{ $fastestClinic->type . ' ' . $fastestClinic->name }}</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-amber-600 text-gray-50 rounded-md">
                    <div class="flex h-28 py-4 px-2 space-x-1.5">
                        <x-ts-icon name="star" class="h-8 w-8 text-gray-100/40" />
                        <div class="space-y-1 pt-1">
                            <h3 class="text-md">Unidade melhor avaliada</h3>
                            <p class="text-lg font-semibold">{{ $bestClinic->type . ' ' . $bestClinic->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1.2,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</div>
