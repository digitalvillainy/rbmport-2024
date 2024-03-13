@php
    //TODO: be sure to remove this @php block as it is only for testing in dev
    $title = 'Blog Title 1';
    $content = 'Lorem Ipsum dolores asdfa adf asdfas d';
    $blogLink = '#';
    $blogImg = @asset('./images/blogImg.jpg');
@endphp

<section class="flex flex-col my-32 mx-auto w-5/12">
    <x-blog-card
        :title="$title"
        :content="$content"
        :blog-link="$blogLink"
        direction="row"
        :blog-img="@asset('images/blogImg.jpg')"
    />
    <div class="flex flex-row mt-24 space-x-6">
        <x-blog-card
            :title="$title"
            :content="$content"
            :blog-link="$blogLink"
            direction="col"
            :blog-img="@asset('images/blogImg.jpg')"
        />
        <x-blog-card
            :title="$title"
            :content="$content"
            :blog-link="$blogLink"
            direction="col"
            :blog-img="@asset('images/blogImg.jpg')"
        />
    </div>
</section>
