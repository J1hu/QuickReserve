<div class="mb-4">
    <label for="{{ $id }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}" required="{{ $required ?? false }}"
        class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm text-gray-900 focus:outline-none focus:ring-neutral-500 focus:border-neutral-500 sm:text-sm {{ $error ? 'border-red-500' : 'border-gray-300' }}">
    @if ($error)
        <span class="text-xs italic text-red-500">{{ $error }}</span>
    @endif
</div>
