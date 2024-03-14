<li class="flex flex-col self-center">
    <a
        href="{{$routeHref}}"
        @class([
             'bg-[#21222D] rounded-xl border-2 border-[#FFCC00] shadow-2xl'=> $path === '/' && $active,
             'bg-[#21222D] rounded-xl border-2 border-[#AA0000] shadow-2xl' => $path === 'hire-a-dev' && $active,
             'bg-[#21222D] rounded-xl border-2 border-[#662E8D] shadow-2xl'=> $path === 'contact' && $active,
             'bg-[#21222D] rounded-xl border-2 border-white shadow-2xl' => $path === 'blog' && $active,
             'text-white font-bold px-3 py-2 w-32 text-center hover:bg-[#21222D] rounded-xl cursor-pointer'
        ])
    >
        {{$btnName}}
    </a>
</li>
