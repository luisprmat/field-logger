<x-layout :title="__('Dashboard')">
    <div class="mx-auto mt-16 max-w-sm rounded-2xl bg-white/5 p-6 shadow">
        <p>{{ __('Welcome, :name', ['name' => auth()->user()->name]) }}</p>
    </div>
</x-layout>
