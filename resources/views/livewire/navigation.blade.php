{{--TODO: update the navigation to have background and border on respective route--}}
<nav class="px-5 bg-[#525470] bg-opacity-65 relative h-20 shadow-2xl">
    <img class="absolute -top-1 h-28 w-40 z-10" src="{{asset('./icons/rbm-logo.svg')}}" alt="Red Banner Media, LLC Logo">
    <ul class="absolute right-0 flex flex-row space-x-5 align-middle min-h-full mr-5">
        <livewire:nav-btn title="build-a-site"/>
        <livewire:nav-btn title="hire-a-dev"/>
        <livewire:nav-btn title="contact"/>
        <livewire:nav-btn title="blog"/>
    </ul>
</nav>
