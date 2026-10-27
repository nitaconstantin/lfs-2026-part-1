{{-- <x-layout title="Home page">
    <h1>{{ $greeting }}, {{ $person }}</h1>
</x-layout> --}}
{{-- @dd($tasks) --}}
{{-- @if ($tasks)
    {{ dd($tasks) }}
@endif --}}
<x-layout>
    <h1 class="text-white text-2xl">Edit Idea</h1>
    <form action="/ideas/{{ $idea->id }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="col-span-full">
            <div class="mt-2">
                <textarea class="text-white block w-full rounded-md bg-white/5 px-3" name="description" id="description" rows="5">
{{ $idea->description }}
                </textarea>
            </div>

        </div>
        <div class="mt-6 flex items-center  gap-x-3">
            <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white">
                Update
            </button>
            <button type="submit" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white"
                form="delete-idea-form" onclick="return confirm('Are you sure you want to delete this Idea?')">
                Delete
            </button>
        </div>
    </form>

    <form method="POST" action="/ideas/{{ $idea->id }}" id="delete-idea-form">
        @csrf
        @method('DELETE')
    </form>








</x-layout>
