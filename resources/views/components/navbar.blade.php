<header class="mb-12">
    <nav class="flex items-center justify-between px-6 py-4 bg-white border rounded-lg shadow border-zinc-100">
        <h3 class="text-xl font-bold text-zinc-900">
            {{ config('app.name', 'Chirper') }}
        </h3>
        <div class="flex gap-2">
            <x-ui.button href="/login" variant="secondary">Login</x-ui.button>
            <x-ui.button href="/login">Register</x-ui.button>
        </div>
    </nav>
</header>
