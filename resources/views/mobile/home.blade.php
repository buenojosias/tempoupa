<x-mobile-layout>
    <x-header />
    <section class="space-y-4">
        {{-- <h1 class="text-2xl font-semibold">Bem vindo(a) ao Tempo UPA</h1> --}}
        {{-- <h2 class="text-gray-600 text-md">Acompanhe em <strong>tempo real</strong> a situação das Unidades de Pronto Atendimento perto de você
        </h2> --}}

        <div class="grid grid-cols-2 gap-x-2">
            <x-ts-stats title="Cidades" :number="100" icon="map" color="teal" />
            <x-ts-stats title="Unidades" :number="100" icon="building-hospital" color="blue" />
        </div>
    </section>

    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <div class="overflow-hidden mt-2">
        <div class="swiper-container px-4">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-secondary-400 text-gray-50 rounded-md">
                    <div class="flex h-28 py-4 px-2 space-x-1.5">
                        <x-ts-icon name="map-pin" class="h-8 w-8 text-gray-100/40" />
                        <div class="space-y-1 pt-1">
                            <h3 class="text-md">Unidade mais próxima</h3>
                            <p class="text-lg font-semibold">UPA Campo Comprido</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-primary-400 text-gray-50 rounded-md">
                    <div class="flex h-28 py-4 px-2 space-x-1.5">
                        <x-ts-icon name="clock" class="h-8 w-8 text-gray-100/40" />
                        <div class="space-y-1 pt-1">
                            <h3 class="text-md">Unidade com menor tempo</h3>
                            <p class="text-lg font-semibold">UPA Fazendinha</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-amber-600 text-gray-50 rounded-md">
                    <div class="flex h-28 py-4 px-2 space-x-1.5">
                        <x-ts-icon name="star" class="h-8 w-8 text-gray-100/40" />
                        <div class="space-y-1 pt-1">
                            <h3 class="text-md">Unidade melhor avaliada</h3>
                            <p class="text-lg font-semibold">UPA Boa Vista</p>
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
</x-mobile-layout>
