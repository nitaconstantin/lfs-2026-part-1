<x-layout>
    <form action="/ideas/create" method="POST">
        @csrf
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">New Idea</legend>

            <label class="label">Description</label>
            <textarea class="textarea w-full @error('description') textarea-error text-error @enderror" name="description"
                id="description" rows="3" placeholder="Your Idea">{{ old('description', request('description')) }}</textarea>
            <x-forms.error name="description" />

            <button type="submit" class="btn btn-neutral mt-4">Create</button>
        </fieldset>
    </form>








</x-layout>
