{{-- <x-layout title="Home page">
    <h1>{{ $greeting }}, {{ $person }}</h1>
</x-layout> --}}
{{-- @dd($tasks) --}}
{{-- @if ($tasks)
    {{ dd($tasks) }}
@endif --}}
<x-layout>
    <h1 class="text-white text-2xl">Ideas page</h1>


    <div class="mt-6 text-white">
        @if (count($ideas))
            <h3 class="font-bold">Your Ideas</h3>
            <ul>
                @foreach ($ideas as $idea)
                    <li class="text-sm">
                        <a href="/ideas/{{ $idea->id }}">
                            {{ $idea->description }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-sm">You have no ideas yet. <a class="underline" href="/ideas/create">Create new Idea</a>
            </p>
        @endif
    </div>






</x-layout>
