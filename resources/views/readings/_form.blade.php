@props(['meter', 'reading' => null])
@csrf
<div class="grid gap-3 md:grid-cols-3">
    <div>
        <label for="value" class="block text-sm">{{ __('Value') }}</label>
        <input
            id="value"
            name="value"
            type="number"
            step="0.001"
            value="{{ old('value', $reading->value ?? '') }}"
            class="w-full rounded-md border border-gray-700 bg-gray-800/40 p-2"
            required
        />
        @error('value')
            <p class="text-sm text-red-400">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="noted_at" class="block text-sm">{{ __('When') }}</label>
        <input
            id="noted_at"
            name="noted_at"
            type="datetime-local"
            value="{{ old('noted_at', optional($reading->noted_at ?? now())->format('Y-m-d\\TH:i')) }}"
            class="w-full rounded-md border border-gray-700 bg-gray-800/40 p-2"
            required
        />
        @error('noted_at')
            <p class="text-sm text-red-400">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="notes" class="block text-sm">{{ __('Notes') }}</label>
        <input
            id="notes"
            name="notes"
            value="{{ old('notes', $reading->notes ?? '') }}"
            class="w-full rounded-md border border-gray-700 bg-gray-800/40 p-2"
        />
        @error('notes')
            <p class="text-sm text-red-400">{{ $message }}</p>
        @enderror
    </div>
</div>
