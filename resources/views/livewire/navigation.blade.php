<nav class="px-5 bg-[#525470] bg-opacity-65 relative h-20 shadow-2xl">
    <a href="/">
        <img class="absolute -top-1 h-28 w-40 z-10" src="{{asset('./icons/rbm-logo.svg')}}"
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
        <li class="flex flex-col self-center">
            <a
                :class="current === '/blog' ? 'blog-active' : 'nav-btn' "
                href="/blog"
            >
                BLOG
            </a>
        </li>
    </ul>
</nav>
