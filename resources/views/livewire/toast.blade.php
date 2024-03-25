<div wire:transition.out.opacity.duration.200ms
     class="w-full text-right relative"
     x-data=""
     x-init="$watch('$wire.show', value => {
        if(value) {
            setTimeout(()=>{
                $wire.toggleShow();
            }, 3000);
        }
     })"
>
    @if($show)
        <div @class([
            'bg-green-800' => $mode === 'success',
            'bg-yellow-800' => $mode === 'warning',
            'bg-red-800' => $mode === 'error',
            "absolute right-0 -top-12 shadow-2xl z-30 font-extrabold rounded-2xl animate-bounce"
        ])>
            <p class="w-full px-8 py-2 text-white text-center">
                {{$title}}
            </p>
            <p class="bg-white w-full px-8 py-2 text-black rounded-b-2xl text-center">
                {{$msg}}
            </p>
        </div>
    @endif
</div>
