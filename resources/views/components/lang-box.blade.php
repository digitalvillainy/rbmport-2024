@props(['title', 'imgSrc', 'imgAlt', 'imgDes'])
<div class="h-24 w-20 xl:h-32 xl:w-24 xl:m-4 my-2 bg-black bg-opacity-40 rounded-lg flex flex-col items-center justify-center shadow-2xl xl:space-y-2">
    <img src="{{asset($imgSrc)}}"
         alt="{{$imgAlt}}"
         aria-description="{{$imgDes}}"
         class="h-12 w-10 xl:h-14 xl:w-16">
    @if(isset($title))
        <span class="text-xs font-extrabold">{{$title}}</span>
    @endif
</div>
