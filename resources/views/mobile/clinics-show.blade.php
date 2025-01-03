<x-mobile-layout>
    <x-clinic-header />

    <section class="space-y-3">
        {{-- <x-ts-alert text="Superlotada" color="red" /> --}}
        <x-ts-alert text="Lotada" color="yellow" />

        <x-ts-card header="Endereço" class="space-y-3">
            @php
                $rating = rand(10, 50) / 10;
            @endphp
            <p>Rua Dr. José Gonçalves, 1000<br />
                Boa Vista, Curitiba - SP</p>
            <div class="flex items-center space-x-2 mt-2 pt-2 border-t">
                <span>{{ $rating }}</span>
                <x-ts-rating static :rate="$rating" color="amber" sm />
            </div>
        </x-ts-card>
        <x-ts-card header="Situação atual" class="space-y-3">
            <div class="flex items-center space-x-2">
                <x-ts-icon name="users" class="h-9 w-9 text-gray-400" />
                <dl>
                    <dt class="text-sm text-gray-600 font-semibold">Pacientes aguardando</dt>
                    <dd class="text-lg text-gray-900">{{ rand(10, 100) }}</dd>
                </dl>
            </div>
            <div class="flex items-center space-x-2">
                <x-ts-icon name="clock" class="h-9 w-9 text-gray-400" />
                <dl>
                    <dt class="text-sm text-gray-600 font-semibold">Tempo médio de espera</dt>
                    <dd class="text-lg text-gray-900">{{ rand(0, 10) }}h {{ rand(0, 59) }}min</dd>
                </dl>
            </div>
            <div class="text-center pt-4 border-t">
                <x-ts-link text="Ver situação completa" :href="route('mobile.clinics.situation', 1)" />
            </div>
        </x-ts-card>

        <x-ts-button text="Estou nesta UPA" color="secondary" class="w-full" lg />

        <div>
            <x-ts-icon name="circle-check" class="h-4 w-4" color="green">
                <x-slot:right>
                    <span class="text-sm">Esta unidade possui display informativo</span>
                </x-slot:right>
            </x-ts-icon>
            <x-ts-icon name="exclamation-circle" class="h-4 w-4" color="red">
                <x-slot:right>
                    <span class="text-sm">Esta unidade não possui display informativo</span>
                </x-slot:right>
            </x-ts-icon>
        </div>
    </section>

</x-mobile-layout>
