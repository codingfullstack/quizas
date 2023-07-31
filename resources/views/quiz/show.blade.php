<x-app-layout>
    <div class="py-12 ">
        <div class=" mx-auto h-96 sm:px-6 lg:px-8 ">
            <div class="columns-1">
                <h1 class="text-7xl mb-5">{{ $quiz->name }}</h1>
                <div>
                    <span class=" text-sm  text-gray-400">{{ $quiz->description }}.
                        <span class="font-bold"> | Quantity of questions:{{ $count }} | Dalivavusių Vartotojų
                            kiekis:{{ $permissionCount }}
                        </span>
                    </span>
                </div>
                @if ($quiz->public === 0)
                    @can('update', $quiz)
                        <form action="{{ route('quiz.update', $quiz->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button name='public' value=1
                                class="bg-purple-600 rounded-xl my-2 mr-5 py-0.5 px-5 text-white font-semibold  hover:bg-purple-900 transition ease-in delay-300 duration-300"
                                type="submit">Public</button>
                        </form>
                    @endcan
                @else
                    @can('update', $quiz)
                        <form action="{{ route('quiz.update', $quiz->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <button name='public' value=0
                                class="bg-purple-600 rounded-xl my-2 mr-5 py-0.5 px-5 text-white font-semibold  hover:bg-purple-900 transition ease-in delay-300 duration-300"
                                type="submit">UnPublic</button>
                        </form>
                    @endcan
                @endif



                @can('delete', $quiz)
                    <form action="{{ route('quiz.destroy', $quiz->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button
                            class="bg-red-600 rounded-xl my-2 mr-5 py-0.5 px-5 text-white font-semibold  hover:bg-red-900 transition ease-in delay-300 duration-300"
                            type="submit">Delete</button>
                    </form>
                @endcan
            </div>
        </div>
    </div>
</x-app-layout>
