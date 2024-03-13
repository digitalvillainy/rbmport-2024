@props([
    'title',
    'content',
    'direction',
    'blogLink',
    'blogImg'
])

<article
    {{ $attributes->class([
            'flex flex-row'=> $direction === 'row',
            'flex flex-col min-h-[50vh]'=> $direction === 'col',
            'border-l-8 border-l-red-700 bg-gradient-to-r to-[#22222E] from-[#3F3D56] shadow-lg'
        ])
    }}
>
    <img
        @class([
            'h-52 w-auto' => $direction === 'row',
            'h-auto w-auto' => $direction === 'col'
        ])
        src="{{$blogImg}}"
        alt="Blog Img"
    >
    <div @class(['self-center flex flex-col grow space-y-6 p-3'])>
        <div class="grow">
            <h3 class="text-2xl text-yellow-500">{{$title}}</h3>
            <p class="text-white">{{$content}}</p>
        </div>
        <a href="{{$blogLink}}" class="w-full text-red-600 font-bold text-xl text-right">READ MORE</a>
    </div>
</article>
