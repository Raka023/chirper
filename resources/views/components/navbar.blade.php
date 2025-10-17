<header class="mb-12">
    <nav class="flex items-center justify-between px-6 py-4 bg-white border rounded-lg shadow border-zinc-100">
        <a class="text-xl font-bold text-zinc-900" href="/">
            {{ config('app.name', 'Chirper') }}
        </a>
        <div class="flex items-center gap-2">
            @auth
                <div class="flex items-center gap-2 mr-4">
                    <img class="rounded-full size-6" src="https://avatars.laravel.cloud/{{ urlencode(auth()->user()->email) }}"
                        alt="{{ auth()->user()->name ?? 'Anonymous' }} avatars">
                    <p class="text-xl font-semibold">{{ auth()->user()->name }}</p>
                </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <x-ui.button type="submit" variant="secondary">Logout</x-ui.button>
                </form>
            @else
                <x-ui.button href="{{ route('login') }}" variant="secondary">Login</x-ui.button>
                <x-ui.button href="{{ route('register') }}">Register</x-ui.button>
            @endauth
        </div>
    </nav>
</header>
