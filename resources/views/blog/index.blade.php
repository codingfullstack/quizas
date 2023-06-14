<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>
    @include('home.filter')
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="  flex flex-wrap md:justify-center sm:justify-center xl:justify-start">
                @foreach ($Blogs as $item)
                    <div
                        class=" rounded sm:w-full md:w-80 h-46  lg:w-96 overflow-hidden shadow-lg w-full m-2  bg-gray-200">
                        {{-- <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains"> --}}
                        <div class=" h-24 px-6 py-4">
                            <div class="font-bold text-xl mb-2"><a
                                    href="{{ route('blog.show', $item->id) }}">{{ $item->title }}</a> </div>
                            <p class="text-gray-700 text-base">
                                {{ \Illuminate\Support\Str::limit(strip_tags($item->body), 15) }}.
                            </p>
                        </div>
                        {{-- <span class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                          <span class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                          <span class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span> --}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
