<x-layout :title="__('Meters')">
    <div class="mb-3 flex items-center justify-between">
        <h2 class="text-lg font-semibold">{{ __('Meters') }}</h2>
        <a
            class="rounded-md bg-blue-600 px-3 py-2 hover:bg-blue-500"
            href="{{ route('meters.create') }}"
        >{{ __('New Meter') }}</a>
    </div>

    <ul class="space-y-2">
        @forelse ($meters as $m)
            <li class="flex items-center justify-between rounded-lg bg-white/5 p-3">
                <div>
                    <div class="font-medium">{{ $m->name }} <span class="opacity-60">({{ $m->code }})</span></div>
                    <div class="text-sm opacity-75">{{ __('Readings') }}: {{ $m->readings_count }}</div>
                </div>
                <div class="space-x-2">
                    <a
                        class="rounded-md bg-blue-600 px-3 py-2 hover:bg-blue-500"
                        href="{{ route('meters.show',$m) }}"
                    >{{ __('View') }}</a>
                    <a
                        class="rounded-md bg-sky-600 px-3 py-2 hover:bg-sky-500"
                        href="{{ route('meters.edit',$m) }}"
                    >{{ __('Edit') }}</a>
                    <form method="POST" action="{{ route('meters.destroy',$m) }}" class="inline">
                        @csrf
                        @method('DELETE')
                        <button
                            class="rounded-md bg-rose-700 px-3 py-2 hover:bg-rose-600"
                            onclick="return confirm('{{ __('Delete this meter?') }}');"
                        >
                            {{ __('Delete') }}
                        </button>
                    </form>
                </div>
            </li>
        @empty
            <li>{{ __('No meters.') }}</li>
        @endforelse
    </ul>

    <div class="mt-4">{{ $meters->links() }}</div>
</x-layout>
