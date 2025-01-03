<x-mobile-layout>
    <x-header>
        <div>
            <a href="/" class="text-gray-900 dark:text-white text-2xl font-bold">Lista de UPAs</a>
        </div>
    </x-header>
    <section class="space-y-3">
        <div>Barra de filtro</div>

        @for ($i = 0; $i < 5; $i++)
            <x-ts-card>
                <h2 class="text-lg font-semibold">UPA Boa Vista</h2>
                <div class="flex justify-between items-center mb-1">
                    <x-ts-icon name="map-pin" class="h-4 w-4">
                        <x-slot:right>
                            <span class="text-sm">Vista Alegre ({{ rand(1, 10) . ',' . rand(0, 9) }} km)</span>
                        </x-slot:right>
                    </x-ts-icon>
                </div>
                <div class="flex justify-between items-center mb-2">
                    <x-ts-icon name="clock" class="h-4 w-4">
                        <x-slot:right>
                            <span class="text-sm">{{ rand(0, 10) }}h {{ rand(0, 59) }}min</span>
                        </x-slot:right>
                    </x-ts-icon>
                    <x-ts-icon name="users" class="h-4 w-4">
                        <x-slot:right>
                            <span class="text-sm">{{ rand(10, 100) }} aguardando</span>
                        </x-slot:right>
                    </x-ts-icon>
                </div>
                <x-ts-rating static :rate="rand(1, 5)" color="amber" sm />
                <div class="text-center mt-4">
                    <x-ts-link text="Ver detalhes" :href="route('mobile.clinics.show', 1)" />
                </div>
            </x-ts-card>
        @endfor
        <p class="pt-4 text-center text-gray-900">A UPA que você procura não está na lista?<br />
            <a href="#" class="text-gray-800 font-semibold underline">Envie-nos uma sugestão</a> para adicioná-la.</p>
    </section>

</x-mobile-layout>
