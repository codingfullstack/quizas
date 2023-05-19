<div class="w-full border-b-2 flex justify-start">
    <form action="{{ route('search') }}" class="w-full  mx-auto sm:px-6 lg:px-8 " method="GET">
        @csrf
        <input type="text" class="rounded-xl h-8 w-11/12 block my-2 mx-auto" name="search" placeholder="Description..">

        <div class=" w-11/12 block my-0 mx-auto">
            <x-filterdrop>
                <x-slot name="label">Categories</x-slot>
                <x-slot name="content">
                    @foreach ($categories as $category)
                        <div><input class="mx-2 my-2" type="radio" name="category" id={{ $category->id }}
                                value={{ $category->id }} />
                            <label class="  " for="{{ $category->id }}">{{ $category->name }}</label>
                        </div>
                    @endforeach
                </x-slot>
            </x-filterdrop>
            <x-filterdrop>
                <x-slot name="label">Author</x-slot>
                <x-slot name="content">
                    @foreach ($usersWithQuiz as $user)
                        <input class="mx-2 my-2" type="radio" name="author" id={{ $user->id }}
                            value={{ $user->id }} />
                        <label class="  " for={{ $user->id }}>{{ $user->name }}</label>
                    @endforeach
                </x-slot>
            </x-filterdrop>
            <button type="submit"
                class="border-2 px-6 py-0.5 my-1 rounded-3xl bg-white uppercase font-semibold">Search</button>
        </div>
    </form>
</div>
