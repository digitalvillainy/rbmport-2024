{{--TODO: make the active work on click rather than through current way--}}
<li class="flex flex-col self-center">
    <a
        href="{{$routeHref}}"
        x-data=""
        x-init="console.log($wire.routeHref)"
        :class="
             $wire.routeHref === '/' ? 'bg-[#21222D] rounded-xl border-2 border-[#FFCC00] shadow-2xl': '',
             $wire.routeHref === '/#hired' ? 'bg-[#21222D] rounded-xl border-2 border-[#AA0000] shadow-2xl' : '',
             $wire.routeHref === '/#faq' ? 'bg-[#21222D] rounded-xl border-2 border-[#662E8D] shadow-2xl': '',
             $wire.routeHref === '/blog' ? 'bg-[#21222D] rounded-xl border-2 border-white shadow-2xl' : '',
             'text-white font-bold px-3 py-2 w-32 text-center hover:bg-[#21222D] rounded-xl cursor-pointer'
        "
    >
        {{$btnName}}
    </a>
</li>
