<section id="faq" class="py-32 grid justify-center bg-[#22222E] border-t-4 border-t-[#662E8D] relative">
    <div class="text-[#662E8D] flex justify-end text-5xl font-bold absolute -top-2 right-1">FAQ</div>
    <article class="space-y-8">
        <div class="">
            <h5 class="text-3xl text-yellow-500 underline font-bold">
                Do you charge per hour or per project?
            </h5>
            <p class="text-white font-bold">
                We charge per project when being hired for building a site. When augmenting a team we charge per hour.
            </p>
        </div>
        <div>
            <h5 class="text-3xl text-yellow-500 underline font-bold">
                Do you work with a team?
            </h5>
            <p class="text-white font-bold">
                Depending on the size of the project I may hire a group to work with me. Otherwise, I work by myself.
            </p>
        </div>
        <div>
            <h5 class="text-3xl text-yellow-500 underline font-bold">
                How much for an assessment?
            </h5>
            <p class="text-white font-bold">
                Assessments are free! I like toe educate customers as best I can about what fits their business.
            </p>
        </div>
    </article>
    {{--TODO: Update to email me directly--}}
    <form wire:submit="contact"
          class="mt-16 pb-12 pt-16 border-t-4 border-t-red-800 grid justify-center space-y-4
          w-8/12 mx-auto bg-[#13131C] relative shadow-xl"
    >
        <h5 class="text-2xl text-red-800 font-bold absolute -top-2 right-0">LET'S TALK</h5>
        <label for="email"></label>
        <input
            type="email"
            name="email"
            id="email"
            wire:model="email"
            placeholder="Your email here..."
            class="w-full bg-[#525470] border-b-2 border-b-yellow-500 font-bold pl-4 py-3"
        />
        <label for="content">
            <textarea
                name="content"
                id="content"
                cols="30"
                rows="10"
                wire:model="content"
                placeholder="Write message here..."
                class="w-full bg-[#525470] border-b-2 border-b-yellow-500 font-bold pl-4 pt-3"
            ></textarea>
        </label>
        <button type="submit" class="text-white bg-green-800 rounded py-2">
            Send
        </button>
    </form>
</section>
