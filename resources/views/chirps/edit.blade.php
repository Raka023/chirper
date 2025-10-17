<x-partials.app title="Edit Chirp">

    <div class="flex flex-col items-center justify-center w-full gap-6">
        <x-heading>Update Chirp</x-heading>

        <div
            class="w-full p-6 space-y-4 transition-all bg-white border rounded-lg shadow border-zinc-200 xl:w-1/2 hover:shadow-md">
            <form action="{{ route('chirps.update', $chirp->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <textarea
                    class="w-full p-3 rounded-md border border-zinc-200 bg-zinc-50 outline-none focus:border-sky-400 focus:ring-2 focus:ring-sky-200 transition"
                    id="message" name="message" rows="3" maxlength="255" placeholder="What's on your mind?" required>{{ old('message') ?? $chirp->message }}</textarea>
                <div class="flex justify-between mt-2">
                    <div>
                        @error('message')
                            <p class="text-sm text-rose-500">{{ $message }}</p>
                        @enderror
                        @session('success')
                            <p class="text-sm text-sky-500">{{ session('success') }}</p>
                        @endsession
                    </div>
                    <div class="space-x-2">
                        <x-ui.button href="/" variant="secondary">Cancel</x-ui.button>
                        <x-ui.button type="submit">
                            Update Chirp
                        </x-ui.button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-partials.app>
