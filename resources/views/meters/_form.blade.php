@props(['meter' => null])
@csrf
<div class="grid gap-3 md:grid-cols-2">
    <div>
        <label for="code" class="block text-sm">{{ __('Code') }}</label>
        <input
            id="code"
            name="code"
            value="{{ old('code', $meter->code ?? '') }}"
            class="w-full rounded-md border border-gray-700 bg-gray-800/40 p-2"
            required
        />
        @error('code')
            <p class="text-sm text-red-400">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="name" class="block text-sm">{{ __('Name') }}</label>
        <input
            id="name"
            name="name"
            value="{{ old('name', $meter->name ?? '') }}"
            class="w-full rounded-md border border-gray-700 bg-gray-800/40 p-2"
            required
        />
        @error('name')
            <p class="text-sm text-red-400">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="unit" class="block text-sm">{{ __('Unit') }}</label>
        <input
            id="unit"
            name="unit"
            value="{{ old('unit', $meter->unit ?? 'bbl') }}"
            class="w-full rounded-md border border-gray-700 bg-gray-800/40 p-2"
            required
        />
        @error('unit')
            <p class="text-sm text-red-400">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="location_lat" class="block text-sm">{{ __('Latitude') }}</label>
        <input
            id="location_lat"
            name="location_lat"
            type="number"
            step="0.000001"
            value="{{ old('location_lat', $meter->location_lat ?? '') }}"
            class="w-full rounded-md border border-gray-700 bg-gray-800/40 p-2"
            required
        />
        @error('location_lat')
            <p class="text-sm text-red-400">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="location_lng" class="block text-sm">{{ __('Longitude') }}</label>
        <input
            id="location_lng"
            name="location_lng"
            type="number"
            step="0.000001"
            value="{{ old('location_lng', $meter->location_lng ?? '') }}"
            class="w-full rounded-md border border-gray-700 bg-gray-800/40 p-2"
            required
        />
        @error('location_lng')
            <p class="text-sm text-red-400">{{ $message }}</p>
        @enderror
    </div>
</div>
