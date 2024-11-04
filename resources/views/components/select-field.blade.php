<div class="mb-4">
    <label for="{{ $id }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <select id="{{ $id }}" name="{{ $name }}" {{ $required ? 'required' : '' }}
        class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm text-gray-900 focus:outline-none focus:ring-neutral-500 focus:border-neutral-500 sm:text-sm {{ $error ? 'border-red-500' : 'border-gray-300' }}">
        @foreach ($options as $value => $text)
            <option value="{{ $value }}" {{ old($name) == $value ? 'selected' : '' }}>{{ $text }}</option>
        @endforeach
    </select>
    @if ($error)
        <span class="text-xs italic text-red-500">{{ $error }}</span>
    @endif
</div>