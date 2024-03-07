@props(['title', 'imgSrc', 'imgAlt', 'imgDes'])
<div {{ $attributes->class(['h-24 w-20 bg-white bg-opacity-40 rounded-lg flex flex-col items-center justify-center shadow-2xl']) }}>
    <img src="{{asset($imgSrc)}}" alt="{{$imgAlt}}" aria-description="{{$imgDes}}" class="h-14 w-16">
    @if(isset($title))
        <span class="font-extrabold">{{$title}}</span>
    @endif
</div>
