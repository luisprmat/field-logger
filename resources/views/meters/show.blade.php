<x-layout :title="$meter->name">
    <div class="space-y-2">
        <div><span class="opacity-60">{{ __('Code') }}:</span> {{ $meter->code }}</div>
        <div><span class="opacity-60">{{ __('Unit') }}:</span> {{ $meter->unit }}</div>
        <div>
            <span class="opacity-60">{{ __('Location') }}:</span>
            {{ $meter->location_lat ?? '—' }}, {{ $meter->location_lng ?? '—' }}
        </div>
    </div>

    <hr class="my-4 border-white/10" />

    <h3 class="mb-2 font-semibold">{{ __('Add :name', ['name' => __('Reading')]) }}</h3>
    <form method="POST" action="{{ route('meters.readings.store', $meter) }}" class="space-y-3">
        @include('readings._form', ['meter' => $meter])
        <button class="rounded-md bg-emerald-600 px-3 py-2 hover:bg-emerald-500">{{ __('Add') }}</button>
    </form>

    <h3 class="mt-6 mb-2 font-semibold">{{ __('History') }}</h3>
    <ul class="space-y-2">
        @forelse ($meter->readings()->latest('noted_at')->get() as $r)
            <li class="flex items-center justify-between rounded-lg bg-white/5 p-3">
                <div>
                    <div class="font-medium opacity-75">{{ $r->value }} {{ $meter->unit }} — {{ $r->notes }}</div>
                    <div class="text-sm">{{ $r->noted_at->format('Y-m-d H:i') }}</div>
                </div>
                <div class="space-x-2">
                    <a
                        class="rounded-md bg-sky-600 px-3 py-2 hover:bg-sky-500"
                        href="{{ route('meters.readings.edit', [$meter, $r]) }}"
                    >{{ __('Edit') }}</a>
                    <form method="POST" action="{{ route('meters.readings.destroy', [$meter, $r]) }}" class="inline">
                        @csrf
                        @method('DELETE')
                        <button
                            class="rounded-md bg-rose-700 px-3 py-2 hover:bg-rose-600"
                            onclick="return confirm('{{ __('Delete this reading?') }}')"
                        >
                            {{ __('Delete') }}
                        </button>
                    </form>
                </div>
            </li>
        @empty
            <li>{{ __('No readings yet.') }}</li>
        @endforelse
    </ul>
</x-layout>
