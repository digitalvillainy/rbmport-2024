@props([
    'title',
    'content',
    'direction',
    'blogLink',
    'blogImg'
])
{{--TODO: finish direction flow--}}
<article
    {{ $attributes->class([
       'flex flex-col w-3/12 grow'=> $direction === 'col',
       'flex flex-row w-8/12 mx-auto'=> $direction === 'row',
        'my-12 border-l-8 border-l-red-700 bg-gradient-to-r to-[#22222E] from-[#3F3D56] shadow-lg space-x-8'
        ])
    }}
>
    <img
        class="h-auto w-72"
        src="{{$blogImg}}"
        alt="Blog Img"
    >
    <div class="self-center flex flex-col grow px-16 space-y-6">
        <div class="grow">
            <h3 class="text-2xl text-yellow-500">{{$title}}</h3>
            <p class="text-white">{{$content}}</p>
        </div>
        <a href="{{$blogLink}}" class="w-full text-red-600 font-bold text-xl text-right">READ MORE</a>
    </div>
</article>
