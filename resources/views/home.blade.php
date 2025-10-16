<x-partials.app title="Home">

    <div class="flex flex-col items-center justify-center w-full gap-6">
        <h2 class="w-full pb-2 text-3xl font-bold tracking-tight scroll-m-20 first:mt-0 lg:w-1/2">Latest Chirp</h2>

        <div
            class="w-full p-6 space-y-4 transition-all bg-white border rounded-lg shadow border-zinc-200 lg:w-1/2 hover:shadow-md">
            <form action="/chirps" method="POST" novalidate>
                @csrf
                <textarea
                    class="w-full p-4 transition rounded-md bg-zinc-50 outline outline-zinc-200 hover:outline-zinc-400 focus:outline-zinc-600"
                    id="message" name="message" rows="3" maxlength="255" placeholder="What's on your mind?" required>{{ old('message') }}</textarea>
                <div class="flex justify-between mt-2">
                    <div>
                        @error('message')
                            <p class="text-sm text-rose-500">{{ $message }}</p>
                        @enderror
                        @session('success')
                            <p class="text-sm text-sky-500">{{ session('success') }}</p>
                        @endsession
                    </div>
                    <x-ui.button type="submit">
                        Chirp
                    </x-ui.button>
                </div>
            </form>
        </div>

        <div class="flex flex-col items-center w-full gap-4">
            @forelse ($chirps as $chirp)
                <x-chirp :chirp="$chirp" />
            @empty
                <div
                    class="w-full p-6 transition-all bg-white border rounded-lg shadow border-zinc-200 lg:w-1/2 hover:shadow-md">
                    <p class="font-medium text-center">No chirps yet, be the first to chirp!</p>
                </div>
            @endforelse
        </div>
    </div>

</x-partials.app>
