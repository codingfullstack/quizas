<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz') }}
        </h2>
    </x-slot> --}}
    @include('home.filter')
    <div class="relative h-96  bg-bg-abstract bg-cover ">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white">
                <h1 class="mb-6 text-5xl font-bold">You want <span id="tekstas"></span> ?</h1>
                <a id="myLink" href="{{ route('quiz.create') }}"><button
                        class="border-2 rounded-md py-0.5 px-10 uppercase font-semibold text-lg">Start</button></a>
            </div>
        </div>
    </div>
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="  flex flex-wrap md:justify-center sm:justify-center xl:justify-start">
                @foreach ($quiz as $item)
                    <div
                        class=" rounded relative sm:w-full md:w-80 h-46  lg:w-96 overflow-hidden shadow-lg w-full m-2  bg-gray-200">
                        @if ($item->suspended && $item->user->id == Auth()->id())
                            <span class="absolute top-2 right-2">
                                <span
                                    class="animate-ping absolute inline-flex h-5 w-5 rounded-full bg-red-400 opacity-75"></span>
                                <span class="inline-flex rounded-full h-5 w-5 bg-red-500"></span>
                            </span>
                            @elseif ($item->suspended)
                            <span class="absolute top-2 right-2">
                                <button type="button"
                                    class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 ">
                                    Suspended
                                </button>
                            </span>
                        @endif
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
                                    @if ($item->suspended)
                                        <button
                                            class="bg-green-200 border-2 border-black rounded-full px-5 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                            See more...
                                        </button>
                                    @elseif (count($item->quiz_permission->where('user_id', Auth::id())) === 0)
                                        <!--  rodyti mygtuką "Join" -->
                                        <form method="POST" action="{{ route('permission.store') }}">
                                            @csrf
                                            @method('POST')
                                            <input type="hidden" name="quiz_id" value="{{ $item->id }}">
                                            <button
                                                class="bg-gray-200 border-2 border-black rounded-full px-5 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                                Join
                                            </button>
                                        </form>
                                    @else
                                        <!-- rodyti mygtuką "See more..." -->
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
                                            <input type="text" name="quiz_id" class="hidden"
                                                value={{ $item->id }}>
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
<script>
    const tekstai = ["Create quiz", 'to join the quiz'];
    let i = 0;

    function typeWriter(element, text, speed) {
        let j = 0;
        const timer = setInterval(() => {
            if (j < text.length) {
                element.innerHTML += text.charAt(j);
                j++;
            } else {
                clearInterval(timer);
                setTimeout(() => {
                    const trinimoTimer = setInterval(() => {
                        const tekstas = element.innerHTML;
                        if (tekstas.length > 0) {
                            element.innerHTML = tekstas.substring(0, tekstas.length - 1);
                        } else {
                            clearInterval(trinimoTimer);
                            i++;
                            if (i >= tekstai.length) {
                                i = 0;
                            }
                            typeWriter(element, tekstai[i], speed);
                        }
                    }, 100);
                }, 3000);
            }
        }, speed);
    }

    const element = document.getElementById("tekstas");
    const sparta = 200; // 200 milisekundžių intervalas tarp simbolių rašymo
    typeWriter(element, tekstai[i], sparta);
</script>
