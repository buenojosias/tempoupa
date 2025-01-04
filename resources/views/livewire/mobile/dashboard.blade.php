<main>
    <x-header />
    <section class="space-y-4">
        <div class="grid grid-cols-2 gap-x-2">
            <x-ts-stats title="Cidades" :number="$citiesCount" icon="map" color="teal" />
            <x-ts-stats title="Unidades" :number="$clinicsCount" icon="building-hospital" color="blue" />
        </div>
    </section>
    <x-dashboard-swiper :nearestClinic="$nearestClinic" :fastestClinic="$fastestClinic" :bestClinic="$bestClinic" />
    {{-- @if ($nearestClinic)
        @livewire('mobile.dashboard.swiper', ['nearestClinic' => $nearestClinic, 'bestClinic' => $bestClinic])
    @endif --}}
    <section class="mt-2 space-y-4">
        {{-- Se tiver registro de atendimento em andamento --}}
        <x-ts-card header="Atendimento atual">
            <p>Você informou que está [<strong>aguardando consulta</strong>] na UPA [Boa Vista].</p>
            <x-slot:footer>
                <x-ts-button text="Atualizar etapa" flat sm />
                <x-ts-button text="Informar situação" flat sm />
            </x-slot>
        </x-ts-card>

        {{-- Se não estiver logado --}}
        <x-ts-card>
            Faça login ou crie uma conta ou para ter uma experiência personalizada.
            <x-slot:footer>
                <x-ts-button text="Fazer login" outline sm />
                <x-ts-button text="Criar conta" sm />
            </x-slot:footer>
        </x-ts-card>

        {{-- Se não tiver atendimento aberto --}}
        <x-ts-card header="Você está em uma UPA?">
            <p>Contribua com outros usuários informando a situação atual da mesma.</p>
            <x-slot:footer>
                <x-ts-button text="Informar situação" sm />
            </x-slot>
        </x-ts-card>

        <x-ts-button text="Listar todas as UPAs" class="w-full" />
    </section>
</main>
<script src="{{ asset('js/geolocation.js') }}"></script>
