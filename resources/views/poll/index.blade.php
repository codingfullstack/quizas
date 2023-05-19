<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Polls') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap md:justify-center sm:justify-center xl:justify-start my-5 border-b-2">
        @foreach ($polls as $poll)
            @livewire('polls.poll-card', ['key' => $poll->id])
        @endforeach
    </div>
</x-app-layout>
