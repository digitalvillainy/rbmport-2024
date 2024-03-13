@props(['title', 'imgSrc', 'imgAlt', 'imgDes'])
<div class="h-32 w-24 bg-black bg-opacity-40 rounded-lg flex flex-col items-center justify-center shadow-2xl space-y-2">
    <img src="{{asset($imgSrc)}}" alt="{{$imgAlt}}" aria-description="{{$imgDes}}" class="h-14 w-16">
    @if(isset($title))
        <span class="font-extrabold">{{$title}}</span>
    @endif
</div>
