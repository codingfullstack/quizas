<x-app-layout>
    <div class="py-12">
        @foreach ($question as $item)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 border-2 rounded-xl p-2 bg-black">
                @include('formError')
                <div class=" overflow-hidden shadow-xl sm:rounded-lg">
                    <h2 class='text-3xl  ml-10 text-white uppercase '>{{ $item->question }}</h2>
                    <Form method="POST" class="my-5 mx-auto w-10/12 text-black inline"
                        action="{{ route('quiz.post', [$quiz->id, $item->question_id]) }}">
                        @csrf
                        <div>
                            <input class="mx-2 my-2" type="radio" name="answer" id="A" value="A" />
                            <label class=" text-white " for="A">{{ $item->A }}</label>
                        </div>
                        <div>
                            <input class="mx-2 my-2" type="radio" name="answer" id="B" value="B" />
                            <label class=" text-white " for="B">{{ $item->B }}</label>
                        </div>
                        @if (!null == $item->C)
                            <div>
                                <input class="mx-2 my-2" type="radio" name="answer" id="C" value="C" />
                                <label class=" text-white " for="C">{{ $item->C }}</label>
                            </div>
                        @endif
                        @if (!null == $item->D)
                            <div>
                                <input class="mx-2 my-2" type="radio" name="answer" id="D" value="D" />
                                <label class=" text-white " for="D">{{ $item->D }}</label>
                            </div>
                        @endif
                        <button
                            class="bg-blue-400 rounded-xl my-2 mr-5 py-1 px-2 uppercase text-white font-semibold  hover:bg-blue-700 transition ease-in delay-300 duration-300"
                            type="submit">Next</button>
                    </Form>
                    <form class="my-5 mx-auto w-10/12 text-black inline"
                        action="{{ route('clear-session', $quiz->id) }}" method="POST">
                        @csrf
                        <button
                            class="bg-red-400 rounded-xl my-2 mr-5 py-1 px-2 uppercase text-white font-semibold  hover:bg-red-700 transition ease-in delay-300 duration-300"
                            type="submit">Cancel</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
<script>
    function closeAlert(event) {
        event.target.parentNode.style.display = "none"
    }
</script>
