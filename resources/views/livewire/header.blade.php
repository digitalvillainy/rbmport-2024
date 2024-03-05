<header @class([
    'border-b-[#FFCC00]' => $path === '/',
    'border-b-[#AA0000]' => $path === 'hire-a-dev',
    'border-b-[#662E8D]' => $path === 'contact',
    'border-b-[#ffffff]' => $path === 'blog',
    "bg-home-hero-pattern bg-cover bg-center h-[50vh] flex flex-col border-b-8 relative"
])>
    <livewire:navigation/>
    <div
        class="bg-white bg-opacity-40 shadow-2xl rounded-xl h-[18rem] w-[54rem] text-white
        self-center mt-32 font-extrabold text-center"
    >
        <div class="flex flex-col justify-center min-h-full w-full mx-auto text-center space-y-5">
            <h1 class="text-[#282662] text-5xl border-[#282662] border-b-8 w-fit mx-auto">WE MAKE WEBSITES</h1>
            <p class="text-3xl text-shadow-lg">
                Whether that’s building from scratch or augmenting your current team
            </p>
        </div>
    </div>

    <div class="flex justify-end">
        <span @class([
            'text-[#FFCC00]' => $path === '/',
            'text-[#AA0000]' => $path === 'hire-a-dev',
            'text-[#662E8D]' => $path === 'contact',
            'text-white' => $path === 'blog',
            "text-5xl font-bold absolute -bottom-12 text-right"
        ])>
            {{$title}}
        </span>
    </div>
</header>
