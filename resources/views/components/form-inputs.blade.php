@props(['type', 'name', 'placeholder'])

<div>
    <input class="shadow appearance-none
        border border-sky-500 rounded w-full
        py-2 px-3 text-gray-700 mb-3 leading-tight
        focus:outline-none
        focus:shadow-outline" type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}" {{ $attributes->merge(['class' => 'form-input rounded-md shadow-sm mt-1 block w-full']) }}>
</div>
