<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz') }}
        </h2>
    </x-slot>
    @include('home.filter')
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="  flex flex-wrap md:justify-center sm:justify-center xl:justify-start">
                @foreach ($quiz as $item)
                    <div class=" rounded sm:w-full md:w-80 h-46  lg:w-96 overflow-hidden shadow-lg w-full m-2  bg-gray-200">
                        {{-- <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains"> --}}
                        <div class=" h-24 px-6 py-4">
                            <div class="font-bold text-xl mb-2"><a
                                    href="{{ route('quiz.show', $item->id) }}">{{ $item->name }}</a> </div>
                            <p class="text-gray-700 text-base">
                                {{ $item->description }}.
                            </p>
                        </div>
                        {{-- @auth --}}
                        <div class="px-6 pt-4 pb-2">
                            @if ($item->public === 1)
                            @if (Auth::check())
                                @if (count($item->quiz_permission->where('user_id', Auth::id())) === 0)
                                    <!-- Vartotojas dar nėra pateikęs leidimo, rodyti mygtuką "Join" -->
                                    <form method="POST" action="{{ route('permission.store') }}">
                                        @csrf
                                        @method('POST')
                                        <input type="hidden" name="quiz_id" value="{{ $item->id }}">
                                        <button class="bg-gray-200 border-2 border-black rounded-full px-5 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                            Join
                                        </button>
                                    </form>
                                @else
                                    <!-- Vartotojas jau pateikė leidimą, rodyti mygtuką "See more..." -->
                                    <button
                                        class="bg-green-200 border-2 border-black rounded-full px-5 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                        See more...
                                    </button>
                                @endif
                            @else
                                <!-- Vartotojas nėra prisijungęs, tikrinti sesijos ID -->
                                @if (count($item->quiz_permission->where('session', session()->getId())) === 0)
                                    <!-- Vartotojas dar nėra pateikęs leidimo, rodyti mygtuką "Join" -->

                                    <form method="POST" action="{{ route('permission.store') }}">
                                        @csrf
                                        <input type="text" name="quiz_id" class="hidden" value={{ $item->id }}>
                                        <button
                                            class="bg-gray-200 border-2 border-black rounded-full px-5 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                            Join
                                        </button>
                                    </form>
                                @else
                                    <!-- Vartotojas jau pateikė leidimą, rodyti mygtuką "See more..." -->
                                    <button
                                    class="bg-green-200 border-2 border-black rounded-full px-5 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                    See more...
                                </button>
                                @endif
                            @endif
                        @endif
                            {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span> --}}
                        </div>
                        {{-- @endauth --}}
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</x-app-layout>
