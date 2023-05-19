@if ($errors->any())
@foreach ($errors->all() as $error)
    <div class="bg-red-100 border  border-red-400 text-red-700 my-2 px-4 py-3 rounded relative"
        role="alert">
        <strong class="font-bold">Test!</strong>
        <span class="block sm:inline">{{ $error }}.</span>
        <span onclick="closeAlert(event)"
            class="absolute -top-1 bottom-0 right-0 px-4 py-3 text-2xl font-bold cursor-pointer">
            x
        </span>
    </div>
@endforeach
@endif
