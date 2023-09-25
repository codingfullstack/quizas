<x-app-layout>
    <div class=" mx-auto h-96 w-11/12 border-b-2">
        @if ($blog->suspended)
            <div class="bg-red-100 border-t border border-red-500 text-red-700 px-4 py-3 rounded-md" role="alert">
                <p class="font-bold">Informational message</p>
                <p class="text-sm font-semibold">Your post has been suspended:#REASON</p>
            </div>
        @endif

        <div class="text-3xl font-semibold my-2">
            <h2>{{ $blog->title }}</h2>
        </div>
        <span class="text-gray-500 ">Last update:{{ $blog->updated_at }}</span>
        <p class="mt-2">{{ $blog->body }}</p>
        @can('update', $blog)
            <form action="{{ route('blog.edit', $blog->id) }}" method="GET">
                @csrf
                <button
                    class="inline-block rounded-full bg-green-300 px-8 my-2 py-2 text-xs font-medium uppercase leading-normal text-white">Edit</button>
            </form>
        @endcan
        @can('delete', $blog)
            <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button
                    class="bg-red-600 rounded-xl my-2 mr-5 py-0.5 px-5 text-white font-semibold  hover:bg-red-900 transition ease-in delay-300 duration-300"
                    type="submit">Delete</button>
            </form>
        @endcan
    </div>
    <div class=" mx-auto w-11/12">
        <h3 class="uppercase font-bold text-xl my-5">Comments</h3>

        @livewire('comments.show', ['key' => $blog->id])
        @livewire('comments.create', ['blog_id' => $blog->id])
    </div>
</x-app-layout>
