<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blogs') }}
        </h2>
    </x-slot>
    @include('home.filter')
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="  flex flex-wrap md:justify-center sm:justify-center xl:justify-start">
                @foreach ($Blogs as $item)
                    <div
                        class="relative w-full h-80 sm:w-80 md:w-80 lg:w-5/12 mx-3 my-3 bg-gray-200 rounded-lg overflow-hidden shadow-lg">
                        @if ($item->suspended && $item->user->id == Auth()->id())
                            <span class="absolute top-2 right-2">
                                <span
                                    class="animate-ping absolute inline-flex h-5 w-5 rounded-full bg-red-400 opacity-75"></span>
                                <span class="inline-flex rounded-full h-5 w-5 bg-red-500"></span>
                            </span>
                        @endif
                        <img class="h-auto bg-cover rounded-lg" src="{{ asset('images/abstract.jpg') }}"
                            alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-semibold text-3xl mb-2">
                                <a class="hover:underline"
                                    href="{{ route('blog.show', $item->id) }}">{{ $item->title }}</a>
                            </div>
                            <div class="text-gray-400 text-base flex justify-between">
                                <p class="inline text-green-600">
                                    {{ $item->created_at }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
