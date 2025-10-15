@props([
    'chirp'
])

<div class="w-full p-6 transition-all bg-white border rounded-lg shadow border-zinc-200 lg:w-1/2 hover:shadow-md">
    <div class="flex flex-col gap-2">
        <div class="flex items-center gap-2">
            @if ($chirp->user)
                <img class="rounded-full size-6"
                    src="https://avatars.laravel.cloud/{{ urlencode($chirp->user->email) }}"
                    alt="{{ $chirp->user->name ?? 'Anonymous' }} avatars">
            @endif
            <p class="font-semibold text-md">{{ $chirp->user->name ?? 'Anonymous' }}</p>
        </div>
        <p class="leading-7">{{ $chirp->message }}</p>
        <p class="text-sm leading-7 text-gray-400">{{ $chirp->created_at->diffForHumans() }}</p>
    </div>
</div>
