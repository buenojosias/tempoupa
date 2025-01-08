<main>
    <x-header />
    <section class="space-y-4">
        <h1 class="text-2xl font-semibold">Consultas</h1>
        @forelse ($consultations as $consultation)
            <x-ts-card>
                {{-- <x-slot:header> --}}
                <div>
                    <x-ts-icon name="calendar-due" class="h-5 w-5">
                        <x-slot:right>
                            {{ $consultation->created_at->format('d/m/Y') }}
                        </x-slot:right>
                    </x-ts-icon>
                </div>
                {{-- </x-slot> --}}
                <div>
                    <x-ts-icon name="building-hospital" class="h-5 w-5">
                        <x-slot:right>
                            {{ $consultation->clinic->type }} {{ $consultation->clinic->name }}
                        </x-slot:right>
                    </x-ts-icon>
                </div>
                <div>
                    <x-ts-icon name="login-2" class="h-5 w-5">
                        <x-slot:right>
                            Entrada: {{ $consultation->entry_time->format('H\hi') }}
                        </x-slot:right>
                    </x-ts-icon>
                </div>
                <div>
                    <x-ts-badge :text="$consultation->status->getLabel()" outline />
                    <x-ts-badge :text="$consultation->classification->getLabel()" :color="$consultation->classification->getColor()" />
                </div>
            </x-ts-card>
        @empty
            <x-ts-card>
                <p>Este espaço é destinado para você registrar seus atendimentos nas UPAs.<br>
                    É possível informar o horário da chegada, da triagem e da consulta, além de avaliar o atendimento.
                </p>
                <p>Seus dados <strong>não</strong> serão divulgados e as informações fornecidas serão usadas para
                    geração de
                    métricas.</p>
            </x-ts-card>
        @endforelse

        <x-ts-button text="Registrar consulta" class="w-full" />
    </section>
</main>
