<header @class([
    'border-b-[#FFCC00] bg-home-hero-pattern' => $path === '/',
    'border-b-[#AA0000] bg-hired-hero-pattern' => $path === 'hire-a-dev',
    'border-b-[#662E8D] bg-contact-hero-pattern' => $path === 'contact',
    'border-b-[#ffffff] bg-blog-hero-pattern' => $path === 'blog',
    "bg-cover bg-center h-[50vh] flex flex-col border-b-4 relative"
])>
    <livewire:navigation/>
    <div
        class="bg-slate-400 bg-opacity-70 shadow-2xl rounded-xl h-[18rem] w-[54rem] text-white
        self-center my-32 font-extrabold text-center text-shadow"
    >
        <div class="flex flex-col justify-center min-h-full w-full mx-auto text-center space-y-5">
            <h1 class="text-[#282662] text-5xl border-[#282662] border-b-8 w-fit mx-auto text-shadow">
                {{$banner['title']}}
            </h1>
            <p class="text-3xl text-shadow-lg">
                {{$banner['msg']}}
            </p>
        </div>
    </div>

    <div class="flex justify-end">
        <span @class([
            'text-[#FFCC00]' => $path === '/',
            'text-[#AA0000]' => $path === 'hire-a-dev',
            'text-[#662E8D]' => $path === 'contact',
            'text-white' => $path === 'blog',
            "text-5xl font-bold absolute -bottom-11 text-right"
        ])>
            {{$title}}
        </span>
    </div>
</header>
