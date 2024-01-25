<div>

    <header class="flex justify-between items-center p-2 mb-[60px]">
        <div class="flex items-center z-10">
            <img wire:click="backHome" class="w-20 h-20 mr-3" src="{{ asset('images/camaraC.webp') }}">
            <h4 class="text-sm font-bold font-roboto italic text-azullogo leading-relaxed">CÁMARA <br />COMERCIO
                <br />DE LOJA
            </h4>
        </div>

        <nav
            class="flex md:flex-row flex-col md:items-center justify-end items-end font-inter text-xs font-semibold z-10">
            <a class="nav-link md:mr-12 sm:mt-0 mb-2 hover:scale-110 transition ease-in-out" href="/cursos">Capacitación</a>
            <a class="nav-link md:mr-12 sm:mt-0 mb-2 hover:scale-110 transition ease-in-out" href="/beneficios">Beneficios</a>
            <a class="nav-link md:mr-12 sm:mt-0 mb-2 hover:scale-110 transition ease-in-out" href="/contactos">Contactos</a>

            @guest
                <a class="nav-link md:mr-12 sm:mt-0 hover:scale-110" href="/register">Afiliate</a>
            @endguest

            @auth
                <div class="hidden sm:flex sm:items-center">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center text-xs leading-4 rounded-md hover:scale-110 focus:outline-none transition ease-in-out duration-150 mb-2 mr-5">
                                <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                                    x-on:profile-updated.window="name = $event.detail.name"></div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            
                            {{-- Sección de perfil
                            <x-dropdown-link :href="route('profile')" wire:navigate>
                                {{ __('Perfil') }}
                            </x-dropdown-link>
                            --}}

                            <!-- Authentication -->
                            <button wire:click="logout" class="w-full text-start">
                                <x-dropdown-link>
                                    {{ __('Cerrar Sesión') }}
                                </x-dropdown-link>
                            </button>
                        </x-slot>
                    </x-dropdown>
                </div>
            @endauth

        </nav>

        <livewire:mancha-top />

    </header>

</div>
