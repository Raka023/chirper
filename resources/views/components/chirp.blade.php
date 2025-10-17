@props(['chirp'])

<div class="w-full p-6 transition-all bg-white border rounded-lg shadow border-zinc-200 xl:w-1/2 hover:shadow-md">
    <div class="flex flex-col gap-2">
        <div class="flex items-center gap-2 mb-2">
            @if ($chirp->user)
                <img class="rounded-full size-6" src="https://avatars.laravel.cloud/{{ urlencode($chirp->user->email) }}"
                    alt="{{ $chirp->user->name ?? 'Anonymous' }} avatars">
            @endif
            <p class="font-semibold text-md">{{ $chirp->user->name ?? 'Anonymous' }}</p>
        </div>
        <p class="leading-7">{{ $chirp->message }}</p>
        <div class="flex items-center justify-between">
            <div class="space-x-2">
                <p class="text-sm leading-7 text-gray-400">
                    <span>{{ $chirp->created_at->diffForHumans() == '0 seconds ago' ? 'Just now' : $chirp->created_at->diffForHumans() }}</span>
                    @if ($chirp->updated_at->gt($chirp->created_at->addSeconds(5)))
                        <span> - </span>
                        <span class="italic">Updated
                            {{ $chirp->updated_at->diffForHumans() == '0 seconds ago' ? 'Just now' : $chirp->updated_at->diffForHumans() }}</span>
                    @endif
                </p>
            </div>
            <div class="flex gap-2">
                @can('update', $chirp)
                    <x-ui.button href="{{ route('chirps.edit', $chirp->id) }}" variant="secondary" size="sm">Edit</x-ui.button>
                @endcan

                @can('delete', $chirp)
                    <form action="{{ route('chirps.destroy', $chirp->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <x-ui.button type="submit" variant="danger" size="sm"
                            onclick="return confirm('Are you sure?')">Delete</x-ui.button>
                    </form>
                @endcan
            </div>
        </div>
    </div>
</div>
