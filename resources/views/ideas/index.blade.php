{{-- <x-layout title="Home page">
    <h1>{{ $greeting }}, {{ $person }}</h1>
</x-layout> --}}
{{-- @dd($tasks) --}}
{{-- @if ($tasks)
    {{ dd($tasks) }}
@endif --}}
<x-layout>
    <div class="mt-6 text-white">
        @if (count($ideas))
            <h3 class="font-bold mb-6">Your Ideas</h3>
            <ul class="mt-6 grid grid-cols-2 gap-x-6 gap-y-4">
                @foreach ($ideas as $idea)
                    <li class="text-sm">
                        {{-- <div class="card bg-neutral text-neutral-content w-96">
                            <p>{{ $idea->description }}</p>
                        </div> --}}
                        <x-idea-card href="/ideas/{{ $idea->id }}">
                            {{ $idea->description }}
                        </x-idea-card>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-sm">You have no ideas yet. <a class="underline" href="/ideas/create">Create new Idea</a>
            </p>
        @endif
    </div>






</x-layout>
