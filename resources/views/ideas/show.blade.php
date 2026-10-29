{{-- <x-layout title="Home page">
    <h1>{{ $greeting }}, {{ $person }}</h1>
</x-layout> --}}
{{-- @dd($tasks) --}}
{{-- @if ($tasks)
    {{ dd($tasks) }}
@endif --}}
<x-layout>

    <div class="card bg-neutral p-6 mt-6">
        <div class="mt-6">
            {{ $idea->description }}
        </div>
        <div class="mt-6 ">
            <a href="/ideas/{{ $idea->id }}/edit" class="btn btn-primary">
                Edit
            </a>
        </div>
    </div>










</x-layout>
