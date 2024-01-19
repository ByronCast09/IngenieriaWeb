<div>

    <header class="flex justify-between items-center p-2 mb-16">
        <div class="flex items-center z-10">
            <img wire:click="backHome" class="w-20 h-20 mr-3" src="{{ asset('images/camaraC.webp') }}">
            <h4 class="text-sm font-bold font-roboto italic text-azullogo leading-relaxed">CÁMARA <br />COMERCIO
                <br />DE LOJA
            </h4>
        </div>

        <nav
            class="flex md:flex-row flex-col md:items-center justify-end items-end font-inter text-xs font-semibold z-10">
            <a class="nav-link md:mr-12 sm:mt-0 mb-2 hover:scale-110" href="/cursos">Capacitación</a>
            <a class="nav-link md:mr-12 sm:mt-0 mb-2 hover:scale-110" href="/beneficios">Beneficios</a>
            <a class="nav-link md:mr-12 sm:mt-0 mb-2 hover:scale-110" href="#">Contactos</a>
            <a class="nav-link md:mr-12 sm:mt-0 hover:scale-110" href="/register">Afiliate</a>
        </nav>

        <livewire:mancha-top />
    </header>

</div>
