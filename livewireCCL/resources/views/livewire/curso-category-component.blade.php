<div class="z-10 sticky">
    <a href="{{ $href }}">
        <main class="flex justify-between items-center w-full h-auto bg-cremacclt rounded-xl mb-3">
            <div class="flex flex-col justify-center pt-3 pl-4 pb-2 w-[90%]">
                <h3 class="font-poppins text-[20px] font-semibold">
                    {{ $curso->titulo }}
                </h3>

                <h4 class="font-poppins text-[15px] text-pretty my-3">
                    {{ $curso->descripcion }}
                </h4>
            </div>

            <div class="flex justify-center items-center w-[163px] h-[87px] m-3 bg-slate-200 rounded-md overflow-hidden">
                @if (!empty($videoInfo) && $videoInfo !== false)
                    <img class="w-full h-full object-cover" src="{{ $videoInfo['thumbnail'] }}">
                @else
                    <h2 class="text-2xl">
                        :(
                    </h2>
                @endif
            </div>
        </main>
        <a />
</div>
