<x-layout>
    <form action="/ideas/create" method="POST">
        @csrf
        <div class="col-span-full">
            <label for="description" class="block text-sm/6 font-medium text-white">New Idea</label>
            <div class="mt-2">
                <textarea class="textarea w-full @error('description') textarea-error text-error @enderror" name="description"
                    id="description" rows="3">{{ old('description', request('description')) }}</textarea>
            </div>
            {{-- @if ($errors->has('description'))
                <p class="text-sm text-red-500 mt-1">{{ $errors->first('description') }}</p>
            @endif --}}
            {{-- @error('description')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror --}}
            <x-forms.error name="description" />
            <p class="mt-3 text-sm/6 text-gray-400">
                Have an idea you want to save for later?
            </p>
        </div>
        <div class="mt-6 flex items-center  gap-x-6">
            <button type="submit" class="btn">
                Save
            </button>
        </div>
    </form>








</x-layout>
