<div class="mb-4">
    @if($label ?? null)
        <label class="{{ ($required ?? false) ? 'label label-required' : 'label' }} font-semibold text-xs uppercase tracking-wide text-gray-600 block mb-2" for="{{ $name }}">
            {{ $label }}
        </label>
    @endif
    @error($name)
    <p class="form-error" role="alert">{{ $message }}</p>
    @enderror
    <input
            autocomplete="off"
            type="{{ $type ?? 'text' }}"
            name="{{ $name }}"
            id="{{ $name }}"
            class="block appearance-none w-full bg-white border border-gray-400 hover:border-teal-600 focus:border-teal-400 px-2 py-2 rounded"
            placeholder="{{ $placeholder ?? '' }}"
            value="{{ old($name, $value ?? '') }}"
            {{ ($required ?? false) ? 'required' : '' }}
    >
</div>
