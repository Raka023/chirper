<x-partials.app title="Home">

    <h2 class="w-full mb-4 text-2xl font-medium lg:w-1/2">Latest Chirp</h2>

    <div
        class="flex-col items-center w-full px-6 py-4 space-y-4 bg-white border rounded-lg shadow border-zinc-200 lg:w-1/2">
        <textarea
            class="w-full p-4 transition rounded-md bg-zinc-50 outline outline-zinc-200 hover:outline-zinc-400 focus:outline-zinc-600"
            id="" name="" rows="3" placeholder="What's on your mind?">{{ '' }}</textarea>
        <div class="flex justify-end">
            <a class="px-4 py-2 font-medium text-white rounded-md bg-zinc-800 hover:bg-zinc-950" href="#">Chirp</a>
        </div>
    </div>

</x-partials.app>
