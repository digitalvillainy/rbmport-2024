{{--TODO: update the navigation to have background and border on respective route--}}
<nav class="px-5 bg-white bg-opacity-45 relative h-16 shadow-2xl">
    <img class="absolute top-2 h-22 w-32 z-10" src="{{asset('./icons/rbm-logo.svg')}}" alt="Red Banner Media, LLC Logo">
    <ul class="absolute right-0 flex flex-row space-x-5 align-middle min-h-full mr-5">
        <livewire:nav-btn title="build-a-site"/>
        <livewire:nav-btn title="hire-a-dev"/>
        <livewire:nav-btn title="contact"/>
        <livewire:nav-btn title="blog"/>
    </ul>
</nav>
