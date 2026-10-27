{{-- <x-layout title="Home page">
    <h1>{{ $greeting }}, {{ $person }}</h1>
</x-layout> --}}
{{-- @dd($tasks) --}}
{{-- @if ($tasks)
    {{ dd($tasks) }}
@endif --}}
<x-layout>
    <h1 class="text-white text-2xl">Idea page</h1>
    <h3 class="text-white">
        {{ $idea->description }}
    </h3>
    <div class="mt-6 flex items-center  gap-x-6">
        <a href="/ideas/{{ $idea->id }}/edit"
            class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white">
            Edit
        </a>

    </div>










</x-layout>
