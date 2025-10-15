<x-partials.app title="Home">

    <div class="flex flex-col items-center justify-center w-full gap-6">
        <h2 class="w-full pb-2 text-3xl font-medium tracking-tight scroll-m-20 first:mt-0 lg:w-1/2">Latest Chirp</h2>

        <div
            class="w-full p-6 space-y-4 transition-all bg-white border rounded-lg shadow border-zinc-200 lg:w-1/2 hover:shadow-md">
            <textarea
                class="w-full p-4 transition rounded-md bg-zinc-50 outline outline-zinc-200 hover:outline-zinc-400 focus:outline-zinc-600"
                id="" name="" rows="3" placeholder="What's on your mind?">{{ '' }}</textarea>
            <div class="flex justify-end">
                <x-ui.button href="#">
                    Chirp
                </x-ui.button>
            </div>
        </div>

        <div class="flex flex-col items-center w-full gap-4">
            @forelse ($chirps as $chirp)
                <div
                    class="w-full p-6 transition-all bg-white border rounded-lg shadow border-zinc-200 lg:w-1/2 hover:shadow-md">
                    <div class="flex flex-col gap-2">
                        <p class="font-semibold">{{ $chirp->user->name ?? 'Anonymous' }}</p>
                        <p class="leading-7">{{ $chirp->message }}</p>
                        <p class="text-sm leading-7 text-gray-400">{{ $chirp->created_at->diffForHumans() }}</p>
                    </div>
                </div>
            @empty
                <div
                    class="w-full p-6 transition-all bg-white border rounded-lg shadow border-zinc-200 lg:w-1/2 hover:shadow-md">
                    <p class="font-medium text-center">No chirps yet, be the first to chirp!</p>
                </div>
            @endforelse
        </div>
    </div>

</x-partials.app>
