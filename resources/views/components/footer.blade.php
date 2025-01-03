<footer>
    <nav>
        <a href="{{ route('mobile.home') }}" class="{{ request()->routeIs('mobile.home') ? 'active' : '' }}">
            <x-ts-icon name="home" class="footer-icon" />
            <span>Home</span>
        </a>
        <a href="{{ route('mobile.clinics.index') }}" class="{{ request()->routeIs('mobile.clinics*') ? 'active' : '' }}">
            <x-ts-icon name="building-hospital" class="footer-icon" />
            <span>UPAs</span>
        </a>
        <a href="#" class="">
            <x-ts-icon name="circle-plus" class="footer-icon" />
            <span>Adicionar</span>
        </a>
        <a href="#" class="">
            <x-ts-icon name="user" class="footer-icon" />
            <span>Conta</span>
        </a>
        <a href="#" class="">
            <x-ts-icon name="menu-2" class="footer-icon" />
            <span>Mais</span>
        </a>
    </nav>
</footer>
