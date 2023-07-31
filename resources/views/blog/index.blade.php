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
                        class=" rounded sm:w-full md:w-80 h-80 lg:w-5/12 overflow-hidden shadow-lg w-full mx-3 my-3  bg-gray-200">
                        <img class="h-auto bg-cover rounded-lg" src="{{ asset('images/abstract.jpg') }}"
                            alt="Sunset in the mountains">
                        <div class="  px-6 py-4">
                            <div class="font-semibold text-3xl mb-2"><a class="hover:underline"
                                    href="{{ route('blog.show', $item->id) }}">{{ $item->title }}</a>
                            </div>
                            <div class="text-gray-400 text-base flex justify-between">
                                {{-- <p class="inline">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($item->body), 20) }}.
                                </p> --}}
                                <p class="inline text-green-600">
                                    {{ $item->created_at }}
                                </p>
                            </div>
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
