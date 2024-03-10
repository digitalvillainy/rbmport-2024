@php
    //TODO: be sure to remove this @php block as it is only for testing in dev
    $title = 'Blog Title 1';
    $content = 'Lorem Ipsum dolores asdfa adf asdfas d';
    $blogLink = '#';
    $blogImg = @asset('./images/blogImg.jpg');
@endphp

<section>
    {{--TODO: Continue to work on direction="col" direction="row" be sure to test thoroughly--}}
    <div class="h-3/4">
        <x-blog-card
            :title="$title"
            :content="$content"
            :blog-link="$blogLink"
            direction="col"
            :blog-img="@asset('images/blogImg.jpg')"/>
    </div>
</section>
