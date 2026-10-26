{{-- <x-layout title="Home page">
    <h1>{{ $greeting }}, {{ $person }}</h1>
</x-layout> --}}
{{-- @dd($tasks) --}}
{{-- @if ($tasks)
    {{ dd($tasks) }}
@endif --}}
<x-layout>
    <h1 class="text-white text-2xl">Ideas page</h1>
    <form action="/ideas" method="POST">
        @csrf
        <div class="col-span-full">
            <label for="idea" class="block text-sm/6 font-medium text-white">New Idea</label>
            <div class="mt-2">
                <textarea class="text-white block w-full rounded-md bg-white/5 px-3" name="idea" id="idea" rows="5"></textarea>
            </div>
            <p class="mt-3 text-sm/6 text-gray-400">
                Have an idea you want to save for later?
            </p>
        </div>
        <div class="mt-6 flex items-center  gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white">
                Save
            </button>
        </div>
    </form>

    <div class="mt-6 text-white">
        @if (count($ideas))
            <h3 class="font-bold">Your Ideas</h3>
            <ul>
                @foreach ($ideas as $idea)
                    <li class="text-sm">{{ $idea->description }}</li>
                @endforeach
            </ul>
        @else
            <p class="text-sm">You have no ideas yet.</p>
        @endif
    </div>






</x-layout>
