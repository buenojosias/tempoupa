<main>
    <x-header>
        <div>
            <a href="/" class="text-gray-900 dark:text-white text-2xl font-bold">Lista de UPAs</a>
        </div>
    </x-header>
    <section class="space-y-3">
        <div>Barra de filtro</div>

        @foreach ($clinics as $clinic)
            <x-ts-card>
                <h2 class="text-lg font-semibold mb-1">{{ $clinic->type . ' ' . $clinic->name }}</h2>
                <div class="flex justify-between items-center mb-1">
                    <x-ts-icon name="map-pin" class="h-4 w-4">
                        <x-slot:right>
                            <span class="text-sm">{{ $clinic->neighborhood }}
                                @if ($clinic->distance)
                                    ({{ number_format($clinic->distance, '1', ',') }} km)
                                @endif
                            </span>
                        </x-slot:right>
                    </x-ts-icon>
                </div>
                <div class="flex items-center space-x-6 mb-2">
                    <x-ts-icon name="users" class="h-4 w-4">
                        <x-slot:right>
                            <span class="text-sm">{{ $clinic->realtimes->where('type', 'quantity')->first()->total }} aguardando</span>
                        </x-slot:right>
                    </x-ts-icon>
                    <x-ts-icon name="clock" class="h-4 w-4">
                        <x-slot:right>
                            <span class="text-sm">{{ $clinic->realtimes->where('type', 'time')->first()->total }}</span>
                        </x-slot:right>
                    </x-ts-icon>
                </div>
                <div class="flex items-center justify-between">
                    {{-- @dd($clinic->realtimes->where('type', 'quantity')->first()->situation); --}}
                    <x-ts-badge :text="$clinic->realtimes->where('type', 'quantity')->first()->situation->getLabel()" :color="$clinic->realtimes->where('type', 'quantity')->first()->situation->getColor()" xs />
                    @if ($clinic->rating)
                        <x-ts-rating static :rate="$clinic->rating" color="amber" sm />
                    @endif
                </div>

                <div class="text-center mt-4">
                    <x-ts-link text="Ver detalhes" :href="route('mobile.clinics.show', $clinic)" />
                </div>
            </x-ts-card>
        @endforeach
        <p class="pt-4 text-center text-gray-900">A UPA que você procura não está na lista?<br />
            <a href="#" class="text-gray-800 font-semibold underline">Envie-nos uma sugestão</a> para adicioná-la.
        </p>
    </section>
</main>
<script src="{{ asset('js/geolocation.js') }}"></script>
