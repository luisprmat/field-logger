<x-layout :title="__('Edit :name', ['name' => $meter->name])">
    <h2 class="mb-3 text-lg font-semibold">{{ __('Edit :name', ['name' => __('Meter')]) }}</h2>
    <form method="POST" action="{{ route('meters.update', $meter) }}" class="space-y-3">
        @method('PUT')
        @include('meters._form', ['meter' => $meter])
        <button class="rounded-md bg-emerald-600 px-3 py-2 hover:bg-emerald-500">{{ __('Update') }}</button>
    </form>
</x-layout>
