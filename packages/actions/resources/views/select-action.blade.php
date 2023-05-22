<div class="filament-actions-select-action">
    <label for="{{ $getId() }}" class="sr-only">
        {{ $getLabel() }}
    </label>

    <select
        id="{{ $getId() }}"
        wire:model="{{ $getName() }}"
        {{ $attributes->class(['sm:text-sm text-gray-900 border-none ring-1 ring-inset ring-gray-300 invalid:text-gray-400 block w-full h-9 py-1 transition duration-75 rounded-md shadow-sm outline-none focus:ring-primary-500 focus:ring-2 focus:ring-inset dark:bg-gray-700 dark:ring-gray-600 dark:focus:ring-primary-500 dark:text-gray-200']) }}
    >
        @if (($placeholder = $getPlaceholder()) !== null)
            <option value="">{{ $placeholder }}</option>
        @endif

        @foreach ($getOptions() as $value => $label)
            <option value="{{ $value }}">
                {{ $label }}
            </option>
        @endforeach
    </select>
</div>
