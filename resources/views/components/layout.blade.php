<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full bg-gray-950 text-gray-100">
    <header class="flex items-center justify-between border-b border-white/10 px-4 py-3">
        <h1 class="font-semibold">
            <a href="{{ route('meters.index') }}">Field Logger</a>
        </h1>
        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="rounded-md bg-white/10 px-3 py-2 hover:bg-white/20">{{ __('Logout') }}</button>
            </form>
        @endauth
    </header>
    <main class="p-4">
        @if (session('status'))
            <div class="mb-4 rounded-md border border-emerald-700 bg-emerald-700/30 p-2">{{ session('status') }}</div>
        @endif
        {{ $slot }}
    </main>
</body>
</html>
