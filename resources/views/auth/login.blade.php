<x-layout :title="__('Log in')">
    <div class="mx-auto mt-16 max-w-sm rounded-2xl bg-white/5 p-6 shadow">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="mb-4 text-xl font-semibold">{{ __('Sign in') }}</h1>
            <label for="email" class="block text-sm">{{ __('Email') }}</label>
            <input
                id="email"
                name="email"
                type="email"
                class="mt-1 mb-3 w-full rounded border border-gray-700 bg-gray-800/40 p-2"
                autocomplete="username"
                required
            />
            <label for="password" class="block text-sm">{{ __('Password') }}</label>
            <input
                id="password"
                name="password"
                type="password"
                class="mt-1 mb-3 w-full rounded border border-gray-700 bg-gray-800/40 p-2"
                required
            />
            @error('email')
                <p class="mb-2 text-sm text-red-400">{{ $message }}</p>
            @enderror
            <button class="w-full rounded-2xl bg-blue-600 py-2 hover:bg-blue-500">{{ __('Log in') }}</button>
        </form>
    </div>
</x-layout>
