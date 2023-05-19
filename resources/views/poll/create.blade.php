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
                    action="{{ route('poll.store') }}">
                    @csrf

                    <h2 class="text-xl text-white uppercase font-semibold ">New poll</h2>
                    <input
                        class=" block  my-2 h-8 w-11/12 rounded-xl border-lime-500 border-2 focus:border-lime-500  focus:ring-0"
                        type="text" name="question" id="" placeholder="Question"  value="{{ old('question') }}">
                    <div>
                    <button
                        class="bg-blue-500 mr-2 rounded-xl py-1 my-2 px-4 uppercase text-white font-semibold  hover:bg-blue-800 transition ease-in delay-150 duration-300"
                        type="submit">Create</button>
                </Form>
            </div>
        </div>
    </div>
</x-app-layout>

