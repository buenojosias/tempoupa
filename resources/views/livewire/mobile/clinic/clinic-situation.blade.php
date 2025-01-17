<main>
    <x-clinic-header :clinic="$clinic" />
    <section class="space-y-3">
        {{-- <x-ts-select.native label="Grupo" :options="['Geral','Pediatria']" /> --}}
        <x-ts-card header="Tempo de espera por classificação" class="space-y-2">
            <div class="flex justify-between items-center border-l-4 border-blue-600 pl-3">
                <dl class="text-sm">
                    <dt class="text-blue-600 font-semibold">Azul</dt>
                    <dd>{{ $time->blue ?? '...' }}</dd>
                </dl>
            </div>
            <div class="flex justify-between items-center border-l-4 border-green-600 pl-3">
                <dl class="text-sm">
                    <dt class="text-green-600 font-semibold">Verde</dt>
                    <dd>{{ $time->green ?? '...' }}</dd>
                </dl>
            </div>
            <div class="flex justify-between items-center border-l-4 border-yellow-600 pl-3">
                <dl class="text-sm">
                    <dt class="text-yellow-600 font-semibold">Amarelo</dt>
                    <dd>{{ $time->yellow ?? '...' }}</dd>
                </dl>
            </div>
            <div class="flex justify-between items-center border-l-4 border-red-600 pl-3">
                <dl class="text-sm">
                    <dt class="text-red-600 font-semibold">Vermelho</dt>
                    <dd>{{ $time->red ?? '...' }}</dd>
                </dl>
            </div>
            <div class="flex justify-between items-center border-l-4 border-slate-600 pl-3">
                <dl class="text-sm">
                    <dt class="text-slate-600 font-semibold">Média</dt>
                    <dd>{{ $time->total ?? '...' }}</dd>
                </dl>
            </div>
            <x-slot:footer>
                <div class="w-full flex justify-between items-center">
                    <div class="text-sm text-gray-600">
                        @if (@$quantity->updated_at)
                            Atualizado {{ $time->updated_at->diffForHumans() }}
                        @endif
                    </div>
                    <div>
                        <x-ts-button text="Atualizar" sm />
                    </div>
                </div>
            </x-slot:footer>
        </x-ts-card>

        <x-ts-card header="Pacientes aguardando por classificação" class="space-y-2">
            <div class="flex justify-between items-center border-l-4 border-blue-600 pl-3">
                <dl class="text-sm">
                    <dt class="text-blue-600 font-semibold">Azul</dt>
                    <dd>{{ $quantity->blue ?? '...' }}</dd>
                </dl>
            </div>
            <div class="flex justify-between items-center border-l-4 border-green-600 pl-3">
                <dl class="text-sm">
                    <dt class="text-green-600 font-semibold">Verde</dt>
                    <dd>{{ $quantity->green ?? '...' }}</dd>
                </dl>
            </div>
            <div class="flex justify-between items-center border-l-4 border-yellow-600 pl-3">
                <dl class="text-sm">
                    <dt class="text-yellow-600 font-semibold">Amarelo</dt>
                    <dd>{{ $quantity->yellow ?? '...' }}</dd>
                </dl>
            </div>
            <div class="flex justify-between items-center border-l-4 border-red-600 pl-3">
                <dl class="text-sm">
                    <dt class="text-red-600 font-semibold">Vermelho</dt>
                    <dd>{{ $quantity->red ?? '...' }}</dd>
                </dl>
            </div>
            <div class="flex justify-between items-center border-l-4 border-slate-600 pl-3">
                <dl class="text-sm">
                    <dt class="text-slate-600 font-semibold">Total</dt>
                    <dd>{{ $quantity->total ?? '...' }}</dd>
                </dl>
            </div>
            <x-slot:footer>
                <div class="w-full flex justify-between items-center">
                    <div class="text-sm text-gray-600">
                        @if (@$quantity->updated_at)
                            Atualizado {{ $quantity->updated_at->diffForHumans() }}
                        @endif
                    </div>
                    <div>
                        <x-ts-button text="Atualizar" sm />
                    </div>
                </div>
            </x-slot:footer>
        </x-ts-card>

        <p class="pt-2 text-center text-sm">
            Estas informações foram fornecidas pelos próprios usuários do aplicativo, por meio de dados disponíveis no painel da UPA.
        </p>
    </section>
</main>
<script src="{{ asset('js/geolocation.js') }}"></script>
