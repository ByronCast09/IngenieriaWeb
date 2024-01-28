<div>
    <div class="flex justify-between mb-1 mt-[20px]">
        <span class="font-poppins text-[24px] font-semibold text-black">Progreso del curso:</span>
        <span
            class="font-poppins text-[24px] font-semibold text-black">{{ $progress }}%</span>
    </div>
    
    <div class="w-full bg-gray-200 rounded-full h-4 animate-progressBar">
        <div class="bg-gradient-to-r from-azulccl to-gazulccl h-4 rounded-full"
            style="width: {{ $progress }}%">
        </div>
    </div>
</div>