<li class="flex flex-col self-center">
    <a
        href=".{{$routeHref}}"
        @class([
            "bg-[#21222D] rounded-xl border-[{$color}] border-2 shadow-2xl" => $active,
            'text-white font-bold px-3 py-2 w-32 text-center',
        ])
    >
        {{$btnName}}
    </a>
</li>
