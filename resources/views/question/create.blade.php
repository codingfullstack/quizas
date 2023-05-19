<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 border-2 rounded-xl p-2 bg-black">
            <div class=" overflow-hidden shadow-xl sm:rounded-lg">
                @if (Session::has('error'))
                    <div class="bg-red-100 border  border-red-400 text-red-700 my-2 px-4 py-3 rounded relative"
                        role="alert">
                        <strong class="font-bold">Test!</strong>
                        <span class="block sm:inline">{{ Session::get('error') }}.</span>
                        <span onclick="closeAlert(event)"
                            class="absolute -top-1 bottom-0 right-0 px-4 py-3 text-2xl font-bold cursor-pointer">
                            x
                        </span>
                    </div>
                @endif
                @include('formError')
                <h2 class="text-3xl  ml-10 my-10'">Create question </h2>
                <Form class="my-5 mx-auto w-10/12 text-black inline" method="POST"
                    action="{{ route('question.store') }}">
                    @csrf

                    <h2 class="text-xl text-white ">Question #</h2>
                    <input
                        class=" block  my-2 h-8 w-11/12 rounded-xl border-lime-500 border-2 focus:border-lime-500  focus:ring-0"
                        type="text" name="question" id="" placeholder="Question"  value="{{ old('question') }}">
                    <div>
                        <input
                            class=" inline my-2 h-10 w-11/12 rounded-xl border-lime-500 border-2 focus:border-lime-500  focus:ring-0"
                            type="text" name="A" id="" placeholder="A"  value="{{ old('A') }}">
                        <input class="mx-2 my-2" type="radio" name="answer" id="A" value="A" />
                    </div>
                    <div>
                        <input
                            class=" inline my-2 h-10 w-11/12 rounded-xl border-lime-500 border-2 focus:border-lime-500  focus:ring-0"
                            type="text" name="B" id="" placeholder="B" value="{{ old('B') }}">
                        <input class="mx-2 my-2" type="radio" name="answer" id="B" value="B" />
                    </div>
                    <div class="text-red-500 opacity-90">Fields not  required</div>
                    <div>
                        <input
                            class=" inline my-2 h-10 w-11/12 rounded-xl border-lime-500 border-2 focus:border-lime-500  focus:ring-0"
                            type="text" name="C" id="C" placeholder="C" value="{{ old('C') }}">
                        <input class="mx-2 my-2" type="radio" name="answer" id="CA" value="C" />
                    </div>
                    <div>
                        <input
                            class=" inline my-2 h-10 w-11/12 rounded-xl border-lime-500 border-2 focus:border-lime-500  focus:ring-0"
                            type="text" name="D" id="D" placeholder="D" value="{{ old('D') }}">
                        <input class="mx-2 my-2" type="radio" name="answer" id="DA" value="D" />
                    </div>
                    <button
                        class="bg-blue-500 mr-2 rounded-xl py-1 my-2 px-4 uppercase text-white font-semibold  hover:bg-blue-800 transition ease-in delay-150 duration-300"
                        type="submit">Next</button>
                </Form>
                <form class="my-5 mx-auto w-10/12 text-black inline " method="POST"
                    action="{{ route('quiz.destroy', $id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-500 mr-2  rounded-xl py-1 my-2 px-4 uppercase text-white font-semibold  hover:bg-red-700 transition ease-in delay-150 duration-300">Delete
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
                <form class="my-5 mx-auto w-10/12 text-black inline " method="POST"
                    action="{{ route('quiz.create.done', $id) }}">
                    @csrf
                    <button
                        class="bg-green-500 mr-2 rounded-xl py-1 my-2 px-4 uppercase text-white font-semibold  hover:bg-green-800 transition ease-in delay-150 duration-300"
                        type="submit">Done</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    // jQuery
    $('#CA').prop('disabled', true);
    $('#DA').prop('disabled', true);
    $("#C").on("input", function() {
        if ($(this).val() === "") {
            $('#CA').prop('checked', false);
            $('#CA').prop('disabled', true);
        } else {
            $('#CA').prop('disabled', false);
        }
    });
    $("#D").on("input", function() {
        if ($(this).val() === "") {
            $('#DA').prop('checked', false);
            $('#DA').prop('disabled', true);
        } else {
            $('#DA').prop('disabled', false);
        }
    });
    // JavaScript
    function closeAlert(event) {
        event.target.parentNode.style.display = "none"
    }
</script>
