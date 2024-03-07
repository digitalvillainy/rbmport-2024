@props([
    'title',
    'content',
    'direction'
])

<article {{ $attributes->class(['mt-16 pb-12 pt-16 border-l-8 border-l-red-700 grid justify-center space-y-4
                   w-8/12 mx-auto bg-gradient-to-r to-[#22222E] from-[#3F3D56] relative shadow-lg']) }}
>
    <img src="{{@asset('./images/blogImg.jpg')}}" alt="Blog Img">
    <div>
        <h3 class="text-2xl text-yellow-500">{{$title}}</h3>
        <p class="text-white">{{$content}}</p>
    </div>
    <a href="#" class="w-full text-right">READ MORE</a>
</article>
