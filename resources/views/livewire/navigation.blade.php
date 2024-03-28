<nav class="flex px-5 bg-[#525470]/65 xl:relative h-20 shadow-2xl" >
    <div class="hidden xl:flex">
        <a href="/">
            <img class="absolute -top-1 h-22 w-32 xl:h-28 xl:w-40 z-10" src="{{asset('./images/rbm-logo.svg')}}"
                 alt="Red Banner Media, LLC Logo">
        </a>
        <ul x-data="{
                current: $wire.entangle('current'),
                init(){
                    this.current = window.location.hash.length !== 0 ? window.location.hash : window.location.pathname;
                },
                updateByUser(target){
                   this.current = target;
                }
            }"
            class="absolute right-0 flex flex-row space-x-5 align-middle min-h-full mr-5">
            <li class="flex flex-col self-center">
                <a
                    :class="current === '/' ? 'build-a-site-active' : 'nav-btn' "
                    href="/"
                >
                    BUILD A SITE
                </a>
            </li>
            <li class="flex flex-col self-center">
                <a
                    :class="current === '#hired' ? 'hire-a-dev-active' : 'nav-btn' "
                    @click="current = '#hired'"
                    href="/#hired"
                >
                    HIRE A DEV
                </a>
            </li>
            <li class="flex flex-col self-center">
                <a
                    :class="current === '#faq' ? 'contact-active' : 'nav-btn' "
                    @click="current = '#faq'"
                    href="/#faq"
                >
                    CONTACT
                </a>
            </li>
            {{--TODO: Fix when Blog is ready--}}
            {{--        <li class="flex flex-col self-center">--}}
            {{--            <a--}}
            {{--                :class="current === '/blog' ? 'blog-active' : 'nav-btn' "--}}
            {{--                href="/blog"--}}
            {{--            >--}}
            {{--                BLOG--}}
            {{--            </a>--}}
            {{--        </li>--}}
        </ul>
    </div>
    <div class="xl:hidden flex flex-row w-full justify-between self-center"
         x-data="{open: false}">
        <a href="/" class="h-auto">
            <img
                class="h-14 w-22"
                src="{{asset('./images/rbm-logo.svg')}}"
                alt="Red Banner Media, LLC Logo"
            >
        </a>
        <div class="relative">
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="fill-white h-10 w-10"
                 @click="open = !open"
                 viewBox="0 0 448 512">
                <path
                    d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0
                    256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0
                    17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"
                />
            </svg>
            <ul class="text-white space-y-4 absolute right-0 p-5 w-44 text-center z-50 bg-[#525470]/75 rounded-2xl"
                @click.outside="open = false"
                x-show="open">
                <li>
                    <a href="/">
                        BUILD A SITE
                    </a>
                </li>
                <li>
                    <a href="/#hired">
                        HIRE A DEV
                    </a>
                </li>
                <li>
                    <a href="/#faq">
                        CONTACT
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>
