<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('header') }}
        </h2>
    </x-slot> --}}
    <div class="relative h-96 bg-bg-header">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white">
                <h1 class="mb-6 text-5xl font-bold">You want <span id="tekstas"></span> ?</h1>
                <a id="myLink" href="#">
                    <button class="border-2 rounded-md py-0.5 px-10 uppercase font-semibold text-lg">Start</button>
                </a>
            </div>
        </div>
    </div>
    <div class="w-full mx-auto border-b-2 ">
        <div class="border-b-2 border-gray-200 w-full flex justify-center flex-wrap  ">
            {{-- card --}}
            <div
                class="relative mt-6 flex w-96 flex-col rounded-xl bg-white h-56 bg-clip-border text-gray-700 shadow-md mx-5 mb-3">
                <div class="p-6">
                    <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M448 96c0-35.3-28.7-64-64-64L64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-320zM256 160c0 17.7-14.3 32-32 32l-96 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l96 0c17.7 0 32 14.3 32 32zm64 64c17.7 0 32 14.3 32 32s-14.3 32-32 32l-192 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l192 0zM192 352c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l32 0c17.7 0 32 14.3 32 32z" />
                    </svg>
                    <h5
                        class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                        Create poll
                    </h5>
                    <p class=" h-8 block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                        Create a poll and find out what other people think about it.
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <a class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-pink-500"
                        href="{{ route('poll.create') }}">
                        <button
                            class="flex select-none items-center gap-2 rounded-lg py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="button" data-ripple-dark="true">
                            Start
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
            {{-- card end --}}
            {{-- card --}}
            <div
                class="relative mt-6 flex w-96 flex-col rounded-xl bg-white h-56 bg-clip-border text-gray-700 shadow-md mx-5 mb-3">
                <div class="p-6">
                    <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M192 0c-41.8 0-77.4 26.7-90.5 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H282.5C269.4 26.7 233.8 0 192 0zm0 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM105.8 229.3c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L216 328.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V314.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H158.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM160 416a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                    </svg>
                    <h5
                        class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                        Create quiz
                    </h5>
                    <p class=" h-8 block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                        Create amazing quizzes and share with others
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <a class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-pink-500"
                        href="{{ route('quiz.create') }}">
                        <button
                            class="flex select-none items-center gap-2 rounded-lg py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="button" data-ripple-dark="true">
                            Start
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
            {{-- card end --}}
            {{-- card --}}
            <div
                class="relative mt-6 flex w-96 flex-col rounded-xl bg-white h-56 bg-clip-border text-gray-700 shadow-md mx-5 mb-3">
                <div class="p-6">
                    <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M352 96l64 0c17.7 0 32 14.3 32 32l0 256c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l64 0c53 0 96-43 96-96l0-256c0-53-43-96-96-96l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-9.4 182.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L242.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                    </svg>
                    <h5
                        class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                        Join to quiz
                    </h5>
                    <p class=" h-8 block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                        Join in the quiz
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <a class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-pink-500"
                        href="{{ route('quiz.index') }}">
                        <button
                            class="flex select-none items-center gap-2 rounded-lg py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="button" data-ripple-dark="true">
                            Start
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
            {{-- card end --}}
        </div>
        <div class=" w-full flex justify-center flex-wrap my-3  ">
            {{-- card --}}
            <div
                class="relative mt-6 mb-3 flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md mx-5">
                <div class="p-6">
                    <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z" />
                    </svg>
                    <h5
                        class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                        Create blog
                    </h5>
                    <p class="  h-8 block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                        Create amazing blogs and share your thoughts with others
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <a class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-pink-500"
                        href="{{ route('blog.create') }}">
                        <button
                            class="flex select-none items-center gap-2 rounded-lg py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="button" data-ripple-dark="true">
                            Start
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
            {{-- card end --}}
            {{-- card --}}
            <div
                class="relative mb-3 mt-6 flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md mx-5">
                <div class="p-6">
                    <svg class="h-10 w-10 inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                    </svg>
                    <svg class="h-10 w-10 inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M288 0c-12.2 .1-23.3 7-28.6 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3L288 439.8V0zM429.9 512c1.1 .1 2.1 .1 3.2 0h-3.2z" />
                    </svg>
                    <h5
                        class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                        Rate the quiz
                    </h5>
                    <p class=" h-8 block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                        .....
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <a class="!font-medium !text-blue-gray-900 !transition-colors hover:!text-pink-500"
                        href="#">
                        <button
                            class="flex select-none items-center gap-2 rounded-lg py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="button" data-ripple-dark="true">
                            Start
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
            {{-- card end --}}
        </div>
    </div>
    <div class="w-full flex mx-auto">
        <div class="w-1/2  ">
            <div class="m-5">
                <h2 class="uppercase font-semibold text-xl">most active authors</h2>
                @foreach ($sortedAuthors as $item)
                    <div class="max-w-sm p-6 my-5 bg-white  border-gray-200 rounded-lg shadow  ">
                        <a href="{{ route('blog.show', $item->id) }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                                {{ $item->name }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 ">
                            has {{ $item->total_count }} records</p>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="w-1/2 ">
            <div class="m-5">
                <h2 class="uppercase font-semibold text-xl">most popular blogs</h2>
                @foreach ($popBlogs as $item)
                    <div class="max-w-sm p-6 my-5 bg-white  border-gray-200 rounded-lg shadow   ">
                        <a href="{{ route('blog.show', $item->id) }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                                {{ $item->title }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 ">
                            {{ \Illuminate\Support\Str::limit(strip_tags($item->body), 30) }}.</p>
                        <a href="{{ route('blog.show', $item->id) }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
</x-app-layout>
<script>
    const myLink = document.getElementById('myLink');
    const tekstai = ["Create quiz", "Create poll", "Create blog"];
    const links = ['{{ route('quiz.create') }}', '{{ route('poll.create') }}', '{{ route('blog.create') }}'];
    let i = 0;

    function typeWriter(element, text, speed) {
        myLink.href = links[i]
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
    const sparta = 200; // 100 milisekundžių intervalas tarp simbolių rašymo
    typeWriter(element, tekstai[i], sparta);
</script>
