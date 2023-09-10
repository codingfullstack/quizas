@extends('layouts.admin')

@section('content')
    <div class="flex">
        <div class="sidebar h-screen  p-2 w-[300px] overflow-y-auto text-center bg-gray-900">
            <div class="text-gray-100 text-xl">
                <div class="p-2.5 mt-1 flex items-center">
                    <h1 class="font-bold text-gray-200 text-[15px] ml-3">Quizzes</h1>
                </div>
                <div class="my-2 bg-gray-600 h-[1px]"></div>
            </div>
            <div
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <i class="bi bi-house-door-fill"></i>
                <span class="text-[15px] ml-4 text-gray-200 font-bold">Quiz</span>
            </div>
            <div
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <i class="bi bi-house-door-fill"></i>
                <span class="text-[15px] ml-4 text-gray-200 font-bold">Poll</span>
            </div>
            <div
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <i class="bi bi-bookmark-fill"></i>
                <span class="text-[15px] ml-4 text-gray-200 font-bold">Blog</span>
            </div>
            <div class="my-4 bg-gray-600 h-[1px]"></div>
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
                onclick="dropdown()">
                <i class="bi bi-chat-left-text-fill"></i>
                <div class="flex justify-between w-full items-center">
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">DropDown</span>
                    <span class="text-sm rotate-180" id="arrow">
                        <i class="bi bi-chevron-down"></i>
                    </span>
                </div>
            </div>
            <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold" id="submenu">
                <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                    Social
                </h1>
                <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                    Personal
                </h1>
                <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                    Friends
                </h1>
            </div>
            <div
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <i class="bi bi-box-arrow-in-right"></i>
                <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
            </div>
        </div>
        {{-- End sidenav --}}
        <main class=" w-screen bg-red-900">

            <div class="  p-10 text-white shadow-lg  bg-gray-950">
                <h2 class="mb-5 text-5xl font-semibold border-b-2">Hello #NAME!</h2>
                <p class="text-xl">
                    I'm glad you're back. Check what has changed since your last login
                </p>
            </div>
            <section class="">
                <div class="flex">
                    <div
                        class="relative bg-gray-900 flex w-full text-center  flex-col  my-5 bg-clip-border text-white shadow-md">
                        <div class="p-10">
                            <h5
                                class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                We now have <span id="user">0</span> wonderful users
                            </h5>
                        </div>
                    </div>
                </div>
            </section>

            {{-- NEXT SECTION --}}
            <section class="bg-gray-950">

                <div class=" flex flex-wrap justify-between">
                    <div
                        class="relative flex w-96 text-center flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                        <div class="p-6">
                            <h5
                                class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                There are now <span id="blog">0</span> published blogs
                            </h5>
                        </div>
                        <div class="p-6 pt-0">
                            <button
                                class="select-none rounded-lg bg-pink-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button" data-ripple-light="true">
                                View
                            </button>
                        </div>
                    </div>


                    <div
                        class="relative flex w-96 flex-col rounded-xl text-center bg-white bg-clip-border text-gray-700 shadow-md">
                        <div class="p-6">
                            <h5
                                class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                There are now <span id="poll">0</span> published polls
                            </h5>
                        </div>
                        <div class="p-6 pt-0">
                            <button
                                class="select-none rounded-lg bg-pink-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button" data-ripple-light="true">
                                View
                            </button>
                        </div>
                    </div>


                    <div
                        class="relative flex w-96 flex-col rounded-xl text-center bg-white bg-clip-border text-gray-700 shadow-md">
                        <div class="p-6">
                            <h5
                                class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                There are now <span id="quiz">0</span> published quizzes
                            </h5>
                        </div>
                        <div class="p-6 pt-0">
                            <button
                                class="select-none rounded-lg bg-pink-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button" data-ripple-light="true">
                                View
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            {{-- START ACTIVITY SECTION --}}
            <section class="bg-blue-500 my-5">
                <div class=" flex flex-wrap justify-between">
                    {{-- card --}}
                    <div class="w-96 bg-yellow-500 my-5">
                        <div>
                            <h3 class="uppercase text-lg font-semibold h-12 flex border-b-2  items-center ">
                                Blogs activity
                            </h3>
                        </div>
                        <div class="text-gray-400">
                            <div class=" flex justify-between border-b-2">
                                <span class=" m-2">#BLOG NAME</span>
                                <span class="m-2">#USER NAME</span>
                            </div>
                            <div class=" flex justify-between border-b-2">
                                <span class="m-2">#BLOG NAME</span>
                                <span class="m-2">#USER NAME</span>
                            </div>
                            <div class=" flex justify-between border-b-2">
                                <span class="m-2">#BLOG NAME</span>
                                <span class="m-2">#USER NAME</span>
                            </div>
                            <div class=" flex justify-between border-b-2">
                                <span class="m-2">#BLOG NAME</span>
                                <span class="m-2">#USER NAME</span>
                            </div>
                            <div class=" flex justify-between border-b-2">
                                <span class="m-2">#BLOG NAME</span>
                                <span class="m-2">#USER NAME</span>
                            </div>
                        </div>
                    </div>
                    {{-- end card --}}
                    {{-- card --}}
                    <div class="w-96 bg-yellow-500 my-5 rounded-lg">
                        <div>
                            <h3 class="uppercase text-lg font-semibold h-12 flex border-b-2  items-center ">
                                Blogs activity
                            </h3>
                        </div>
                        <div class="text-gray-400">
                            <div class=" flex justify-between border-b-2 rounded-lg">
                                <span class=" m-2">#BLOG NAME</span>
                                <span class="m-2">#USER NAME</span>
                            </div>
                            <div class=" flex justify-between border-b-2 rounded-lg">
                                <span class="m-2">#BLOG NAME</span>
                                <span class="m-2">#USER NAME</span>
                            </div>
                            <div class=" flex justify-between border-b-2 rounded-lg">
                                <span class="m-2">#BLOG NAME</span>
                                <span class="m-2">#USER NAME</span>
                            </div>
                            <div class=" flex justify-between border-b-2 rounded-lg">
                                <span class="m-2">#BLOG NAME</span>
                                <span class="m-2">#USER NAME</span>
                            </div>
                            <div class=" flex justify-between border-b-2 rounded-lg">
                                <span class="m-2">#BLOG NAME</span>
                                <span class="m-2">#USER NAME</span>
                            </div>
                        </div>
                    </div>
                    {{-- end card --}}
                    {{-- card --}}
                    <div class="w-96 bg-yellow-500 my-5">
                        <div>
                            <h3 class="uppercase text-lg font-semibold h-12 flex border-b-2  items-center ">
                                Blogs activity
                            </h3>
                        </div>
                        <div class="text-gray-400">
                            <div class=" flex justify-between border-b-2">
                                <span class=" m-2">#BLOG NAME</span>
                                <span class="m-2">#USER NAME</span>
                            </div>
                            <div class=" flex justify-between border-b-2">
                                <span class="m-2">#BLOG NAME</span>
                                <span class="m-2">#USER NAME</span>
                            </div>
                            <div class=" flex justify-between border-b-2">
                                <span class="m-2">#BLOG NAME</span>
                                <span class="m-2">#USER NAME</span>
                            </div>
                            <div class=" flex justify-between border-b-2">
                                <span class="m-2">#BLOG NAME</span>
                                <span class="m-2">#USER NAME</span>
                            </div>
                            <div class=" flex justify-between border-b-2">
                                <span class="m-2">#BLOG NAME</span>
                                <span class="m-2">#USER NAME</span>
                            </div>
                        </div>
                    </div>
                    {{-- end card --}}
                </div>
            </section>
        </main>
    </div>


    <script type="text/javascript">
        const User = "<?php echo $User; ?>";
        const Blog = "<?php echo $Blog; ?>";
        const Poll = "<?php echo $Poll; ?>";
        const Quiz = "<?php echo $Quiz; ?>";

        function dropdown() {
            document.querySelector("#submenu").classList.toggle("hidden");
            document.querySelector("#arrow").classList.toggle("rotate-0");
        }
        dropdown();

        function userCount(pradžia, pabaiga, žingsnis, intervalas) {
            let skaičius = pradžia;
            const skaičiausElementas = document.getElementById("user");
            const intervaloId = setInterval(function() {
                skaičiausElementas.textContent = skaičius;
                skaičius += žingsnis;
                if (skaičius > pabaiga) {
                    clearInterval(intervaloId);
                }
            }, intervalas);
        }
        userCount(0, User, 1, 200);

        function blogCount(pradžia, pabaiga, žingsnis, intervalas) {
            let skaičius = pradžia;
            const skaičiausElementas = document.getElementById("blog");
            const intervaloId = setInterval(function() {
                skaičiausElementas.textContent = skaičius;
                skaičius += žingsnis;
                if (skaičius > pabaiga) {
                    clearInterval(intervaloId);
                }
            }, intervalas);
        }
        blogCount(0, Blog, 1, 200);

        function pollCount(pradžia, pabaiga, žingsnis, intervalas) {
            let skaičius = pradžia;
            const skaičiausElementas = document.getElementById("poll");
            const intervaloId = setInterval(function() {
                skaičiausElementas.textContent = skaičius;
                skaičius += žingsnis;
                if (skaičius > pabaiga) {
                    clearInterval(intervaloId);
                }
            }, intervalas);
        }
        pollCount(0, Poll, 1, 200);

        function quizCount(pradžia, pabaiga, žingsnis, intervalas) {
            let skaičius = pradžia;
            const skaičiausElementas = document.getElementById("quiz");
            const intervaloId = setInterval(function() {
                skaičiausElementas.textContent = skaičius;
                skaičius += žingsnis;
                if (skaičius > pabaiga) {
                    clearInterval(intervaloId);
                }
            }, intervalas);
        }
        quizCount(0, Quiz, 1, 200);
    </script>
@endsection
