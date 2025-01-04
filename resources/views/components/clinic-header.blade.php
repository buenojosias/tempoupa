@props(['clinic' => null])

<div class="clinic-header">
    <h1>{{ $clinic->type ?? 'Carregando...' }} {{ $clinic->name ?? '' }}</h1>
    {{ request()->route()->getName() }}
</div>
<div class="clinic-navstack">
    <ul>
        <li class="me-2">
            <a href="{{ route('mobile.clinics.show', 1) }}" class="{{ request()->routeIs('mobile.clinics.show') ? 'active' : '' }}">Visão geral</a>
        </li>
        <li class="me-2">
            <a href="{{ route('mobile.clinics.situation', 1) }}" class="{{ request()->routeIs('mobile.clinics.situation') ? 'active' : '' }}">Situação</a>
        </li>
        <li class="me-2">
            <a href="#" class="">Métricas</a>
        </li>
        <li class="me-2">
            <a href="#" class="">Avaliações</a>
        </li>
        <li>
            <a
                class="inline-block px-3 py-3 text-gray-400 rounded-t-lg cursor-not-allowed dark:text-gray-500">Disabled</a>
        </li>
    </ul>
</div>
