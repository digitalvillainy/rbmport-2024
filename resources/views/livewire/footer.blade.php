<footer class="flex flex-col justify-center bg-[#525470] bg-opacity-60 pt-6 pb-3 px-4 ">
    <livewire:toast/>
    <div class="flex flex-col w-full xl:w-6/12 mx-auto">
        <form wire:submit="save" class="mx-auto my-4 w-full xl:w-6/12 flex flex-col">
            <label for="email" class="text-center text-white mb-4">
                Sign up for our newsletter. We promise not to spam your account.
            </label>

            <div class="flex flex-end shadow-xl">
                <input type="email" name="email" id="email"
                       wire:model="email" placeholder="Enter Email Address..."
                       class="w-full bg-[#525470] border-2 border-[#662E8D] font-bold pl-4 border-r-0 text-white"
                >
                <button type="submit"
                        class="py-1 px-4 shadow-xl bg-[#21222D] border-2 border-[#662E8D] cursor-pointer border-l-0 text-white"
                >
                    Subscribe
                </button>
            </div>
            <div>
                @error('email') <span class="text-red-800">{{$message}}</span> @enderror
            </div>
        </form>
    </div>
    <div class="flex flex-col-reverse xl:flex-row justify-between">
        <span class="text-white">Made By Red Banner Media 2020-{{$now}}</span>
        <ul class="flex flex-row justify-between content-center w-full my-4">
            <li class="self-center cursor-pointer">
                <a href="#top">
                    <img src="{{asset('./icons/arrow.svg')}}" alt="arrow up" class="h-12 w-12" title="Go To Top">
                </a>
            </li>
            <li class="self-center cursor-pointer">
                <a href="https://twitter.com/RBMDevs" target="_blank">
                    <img src="{{asset('./icons/twitter.svg')}}" alt="Twitter" title="twitter">
                </a>
            </li>
            <li class="self-center cursor-pointer">
                <a href="https://github.com/Red-Banner-Media" target="_blank">
                    <img src="{{asset('./icons/GitHub.svg')}}" alt="GitHub" title="github">
                </a>
            </li>
            <li class="self-center cursor-pointer">
                <a href="https://www.linkedin.com/company/red-banner-media/" target="_blank">
                    <img src="{{asset('./icons/linkedin.svg')}}" alt="LinkedIn" title="linkedin">
                </a>
            </li>
        </ul>
    </div>
</footer>
