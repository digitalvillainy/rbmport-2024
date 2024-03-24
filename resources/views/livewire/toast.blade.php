<div wire:transition.out.opacity.duration.200ms class="w-full text-right relative">
    @if($show)
        <div class="absolute right-0 -top-12 shadow-2xl z-30 font-extrabold rounded-2xl {{$color}}">
            <p class="w-full px-8 py-2 text-white text-center">
                {{$title}}
            </p>
            <p class="bg-white w-full px-8 py-2 text-black rounded-b-2xl text-center">
                {{$msg}}
            </p>
        </div>
    @endif
</div>
