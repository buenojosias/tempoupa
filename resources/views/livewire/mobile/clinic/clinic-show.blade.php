<main>
    <x-clinic-header :clinic="$clinic" />
    @if ($clinic)
        <section class="space-y-3">
            @if (in_array($quantity->situation->value, ['L', 'S']))
                <x-ts-alert :text="$quantity->situation->getLabel()" :color="$quantity->situation->getColor()" />
            @endif
            <x-ts-card header="Endereço" class="space-y-3">
                <p>{{ $clinic->address }}<br />
                    {{ $clinic->neighborhood }}, {{ $clinic->city->name }} -
                    {{ $clinic->city->metropolitanRegion->state->abbreviation }}
                    @if ($clinic->distance)
                        ({{ number_format($clinic->distance, '1', ',') }} km)
                    @else
                        (Autorize a localização para ver a distância)
                    @endif
                </p>
                {{-- @if ($clinic->rating)
                    <div class="flex items-center space-x-2 mt-2 pt-2 border-t">
                        <span>{{ $clinic->rating }}</span>
                        <x-ts-rating static :rate="$clinic->rating" color="amber" sm />
                    </div>
                @endif --}}
            </x-ts-card>
            <x-ts-card header="Situação atual" class="space-y-3">
                <div class="flex items-center space-x-2">
                    <x-ts-icon name="users" class="h-9 w-9 text-gray-400" />
                    <dl>
                        <dt class="text-sm text-gray-600 font-semibold">Pacientes aguardando</dt>
                        <dd class="text-lg text-gray-900">{{ $quantity->total }}</dd>
                    </dl>
                </div>
                <div class="flex items-center space-x-2">
                    <x-ts-icon name="clock" class="h-9 w-9 text-gray-400" />
                    <dl>
                        <dt class="text-sm text-gray-600 font-semibold">Tempo médio de espera</dt>
                        <dd class="text-lg text-gray-900">{{ $time->total }}</dd>
                    </dl>
                </div>
                <div class="text-center pt-4 border-t">
                    <x-ts-link text="Ver situação completa" :href="route('mobile.clinics.situation', 1)" />
                </div>
            </x-ts-card>
            <x-ts-button text="Estou nesta UPA" color="secondary" class="w-full" lg />
            <div>
                @if ($clinic->has_display)
                    <x-ts-icon name="circle-check" class="h-4 w-4" color="green">
                        <x-slot:right>
                            <span class="text-sm">Esta unidade possui display informativo</span>
                        </x-slot:right>
                    </x-ts-icon>
                @else
                    <x-ts-icon name="exclamation-circle" class="h-4 w-4" color="red">
                        <x-slot:right>
                            <span class="text-sm">Esta unidade não possui display informativo</span>
                        </x-slot:right>
                    </x-ts-icon>
                @endif
            </div>
        </section>
    @else
        Carregando...
    @endif
</main>
<script src="{{ asset('js/geolocation.js') }}"></script>
