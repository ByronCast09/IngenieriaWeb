<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight mr-2">
                {{ __('Cursos') }}
            </h2>
    
            <button class="flex flex-row justify-center items-center w-7 h-7 bg-black text-white rounded-md hover:bg-slate-800">
                +
            </button>
        </div>
    </x-slot>

    <div class="mx-20 mt-10 grid grid-cols-3 gap-4 justify-items-center">
        <article class="flex flex-row bg-white w-80 h-40 rounded-lg shadow-md">

            <section class="m-4 flex flex-col justify-center items-center">
                <div>
                    <h3 class="text-xl font-poppins leading-normal mb-2 self-start">
                        Curso contabilidad
                    </h3>
                </div>
                
                <p class="font-inter text-justify text-sm leading-normal">
                    Descripcion general del curso
                </p>
            </section>
        </article>
    </div>

</x-app-layout>