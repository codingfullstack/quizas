<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 border-2 rounded-xl p-2 bg-black">
            <div class=" overflow-hidden shadow-xl sm:rounded-lg">
                @include('formError')
                <h2 class='text-3xl text-white  ml-10'>Create new Blog</h2>
                <Form method="POST" class="text-black" action="{{ route('blog.store') }}">
                    @csrf

                    <input
                        class="ml-10 my-2 h-8 w-10/12 rounded-xl border-lime-500 border-2 focus:border-lime-500  focus:ring-0"
                        type="text" name="title" id="blog-name" value="{{ old('title') }}" placeholder="Blog Title"
                        required>
                    <textarea class="ml-10 my-2  w-10/12 rounded-xl border-lime-500 border-2 focus:border-lime-500  focus:ring-0"
                        name="body" id="" cols="30" rows="5" placeholder="Body..." required
                        ">{{ old('body') }}</textarea>
                    <div class="ml-10 my-2">
                        @foreach ($categories as $category)
                            <label class=" text-white " for={{ $category->id }}>{{ $category->name }}</label>
                            <input class="mx-2 my-2" type="radio" name="category" id={{ $category->id }}
                                value={{ $category->id }} />
                        @endforeach
                    </div>

                    <button
                        class="ml-10 bg-blue-400 rounded-xl py-1 px-2 uppercase text-white font-semibold  hover:bg-blue-700 transition ease-in delay-300 duration-300 block"
                        type="submit">Create</button>
                </Form>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    function closeAlert(event) {
        event.target.parentNode.style.display = "none"
    }
</script>
