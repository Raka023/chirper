<x-partials.app title="Register">

    <div class="flex flex-col items-center justify-center w-full gap-6">
        <x-heading>Register</x-heading>

        <div
            class="w-full p-6 space-y-4 transition-all bg-white border rounded-lg shadow border-zinc-200 lg:w-1/2 hover:shadow-md">
            <form class="space-y-6" action="{{ route('register.store') }}" method="POST" novalidate>
                @csrf

                <div>
                    <label class="block text-sm font-medium text-zinc-700 mb-1" for="name">Name</label>
                    <input
                        class="w-full p-3 rounded-md border border-zinc-200 bg-zinc-50 outline-none focus:border-sky-400 focus:ring-2 focus:ring-sky-200 transition"
                        id="name" name="name" type="text" value="{{ old('name') }}" required autofocus
                        placeholder="Your Name">
                    @error('name')
                        <p class="text-sm text-rose-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-700 mb-1" for="email">Email Address</label>
                    <input
                        class="w-full p-3 rounded-md border border-zinc-200 bg-zinc-50 outline-none focus:border-sky-400 focus:ring-2 focus:ring-sky-200 transition"
                        id="email" name="email" type="email" value="{{ old('email') }}" required
                        placeholder="email@example.com">
                    @error('email')
                        <p class="text-sm text-rose-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-700 mb-1" for="password">Password</label>
                    <input
                        class="w-full p-3 rounded-md border border-zinc-200 bg-zinc-50 outline-none focus:border-sky-400 focus:ring-2 focus:ring-sky-200 transition"
                        id="password" name="password" type="password" placeholder="Password" required>
                    @error('password')
                        <p class="text-sm text-rose-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-700 mb-1" for="password-confirmation">Confirm
                        Password</label>
                    <input
                        class="w-full p-3 rounded-md border border-zinc-200 bg-zinc-50 outline-none focus:border-sky-400 focus:ring-2 focus:ring-sky-200 transition"
                        id="password-confirmation" name="password_confirmation" type="password"
                        placeholder="Confirm Password" required>
                    @error('password')
                        <p class="text-sm text-rose-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <label class="flex items-center space-x-2">
                    <input class="rounded border-zinc-300 text-sky-600 focus:ring-sky-500" id="show-password"
                        type="checkbox">
                    <span class="text-sm text-zinc-600">Show Password</span>
                </label>

                <x-ui.button class="w-full mt-2" type="submit">
                    Register
                </x-ui.button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('show-password').addEventListener('change', function() {
            const password = document.getElementById('password');

            if (this.checked) {
                password.type = 'text';
            } else {
                password.type = 'password';
            }
        });
    </script>

</x-partials.app>
