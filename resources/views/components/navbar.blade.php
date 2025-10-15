<header class="mb-12">
    <nav class="flex items-center justify-between px-6 py-4 bg-white border rounded-lg shadow border-zinc-100">
        <div class="text-xl font-bold text-gray-900">
            {{ config('app.name', 'Chirper') }}
        </div>
        <div class="flex gap-4">
            <a class="px-4 py-2 font-semibold text-white transition rounded-md bg-zinc-800 hover:bg-zinc-950"
                href="/login">Login</a>
            <a class="px-4 py-2 font-semibold transition rounded-md bg-zinc-200 text-zinc-800 hover:bg-zinc-300"
                href="/register">Register</a>
        </div>
    </nav>
</header>
