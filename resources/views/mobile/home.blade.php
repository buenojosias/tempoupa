<x-mobile-layout>
    <section class="space-y-4">
        <h1 class="text-2xl font-semibold">Bem vindo(a) ao Tempo UPA</h1>
        <h2 class="text-gray-600">Acompanhe em tempo real a situação das Unidades de Pronto Atendimento perto de você</h2>

        {{-- Se tiver registro de atendimento em andamento --}}
        <x-ts-card header="Atendimento atual">
            <p>Você informou que está [<strong>aguardando consulta</strong>] na UPA [Boa Vista].</p>
            <x-ts-button text="Atualizar etapa" />
            <x-ts-button text="Informar condições" />
        </x-ts-card>


        {{-- Se não estiver logado --}}
        <x-ts-card>
            Faça login ou crie uma conta ou  para ter uma experiência personalizada.
        </x-ts-card>

        {{-- Se não tiver atendimento aberto --}}
        <x-ts-card header="Estou em uma UPA">
            <x-ts-button text="Compartilhe informações da condição atual!" />
        </x-ts-card>

        <div class="grid grid-cols-2">
            <x-ts-card header="UPA com menor tempo"></x-ts-card>
            <x-ts-card header="UPA mais próxima"></x-ts-card>
        </div>
        <x-ts-button text="Listar todas as UPAs" class="w-full" />
    </section>
</x-mobile-layout>
