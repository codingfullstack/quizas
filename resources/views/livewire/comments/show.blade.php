<div>
    @foreach ($comments as $comment)
        <div
            class="block rounded-lg my-3 bg-gray-300 p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <h5 class="mb-2 text-md uppercase font-medium  text-neutral-800 "> {{ $comment->name }}</h5>
            <p class="mb-2 text-base text-neutral-600 bg-gray-200 rounded-md p-2 "> {{ $comment->body }}</p>
            <div class="flex justify-end">
                <span class=" text-gray-400">{{ $comment->created_at }}</span>
            </div>
        </div>
    @endforeach
</div>
