<x-layout :title="__('New Meter')">
    <h2 class="mb-3 text-lg font-semibold">{{ __('Create :name', ['name' => __('Meter')]) }}</h2>
    <form method="POST" action="{{ route('meters.store') }}" class="space-y-3">
        @include('meters._form', ['meter' => null])
        <button class="rounded-md bg-emerald-600 px-3 py-2 hover:bg-emerald-500">{{ __('Save') }}</button>
    </form>
</x-layout>
