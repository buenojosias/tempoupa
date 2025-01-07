@props(['clinic' => null, 'rating' => null])

<div class="clinic-header">
    <h1>{{ $clinic->type ?? 'Carregando...' }} {{ $clinic->name ?? '' }}</h1>
    @if (@$clinic->rating)
        <div class="flex items-center space-x-2 ml-1">
            <span>{{ $clinic->rating }}</span>
            <x-ts-rating static :rate="$clinic->rating" color="amber" xs />
        </div>
    @endif
    {{-- {{ request()->route()->getName() }} --}}
</div>
<div class="clinic-navstack">
    <ul>
        @if ($clinic)
            <li class="me-2">
                <a href="{{ route('mobile.clinics.show', $clinic) }}"
                    class="{{ request()->routeIs('mobile.clinics.show') ? 'active' : '' }}">Visão geral</a>
            </li>
            <li class="me-2">
                <a href="{{ route('mobile.clinics.situation', $clinic) }}"
                    class="{{ request()->routeIs('mobile.clinics.situation') ? 'active' : '' }}">Situação</a>
            </li>
            <li class="me-2">
                <a href="#" class="">Métricas</a>
            </li>
            <li class="me-2">
                <a href="#" class="">Avaliações</a>
            </li>
            {{-- <li>
                <a
                    class="inline-block px-3 py-3 text-gray-400 rounded-t-lg cursor-not-allowed dark:text-gray-500">Disabled</a>
            </li> --}}
        @endif
    </ul>
</div>
