@extends('layouts.admin')

@section('content')
    {{-- End sidenav --}}
    <main class=" w-screen bg-neutral-200">
        <div class="  p-10 text-white shadow-lg  bg-gray-950 mx-2 rounded-md">
            <h2 class="mb-5 text-5xl font-semibold border-b-2">Hello {{ Auth::user()->name }}!</h2>
            <p class="text-xl">
                I'm glad you're back. Check what has changed since your last login
            </p>
        </div>
        <section class="">
            <div class="flex">
                <div
                    class="relative mx-2 rounded-md bg-gray-900 flex w-full text-center  flex-col  my-5 bg-clip-border text-white shadow-md">
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
        <section class="bg-gray-950 mx-2 p-5 rounded-md">

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
                        <a href="{{ route('blog.index') }}">
                            <button
                                class="select-none rounded-lg bg-pink-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button" data-ripple-light="true">
                                View
                            </button>
                        </a>
                    </div>
                </div>
                <div
                    class="relative flex w-96  flex-col rounded-xl text-center bg-white bg-clip-border text-gray-700 shadow-md">
                    <div class="p-6">
                        <h5
                            class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                            There are now <span id="poll">0</span> published polls
                        </h5>
                    </div>
                    <div class="p-6 pt-0">
                        <a href="{{ route('poll.index') }}">
                            <button
                                class="select-none rounded-lg bg-pink-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button" data-ripple-light="true">
                                View
                            </button>
                        </a>
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
                        <a href="{{ route('quiz.index') }}">
                            <button
                                class="select-none rounded-lg bg-pink-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button" data-ripple-light="true">
                                View
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {{-- START ACTIVITY SECTION --}}
        <section class="bg-gray-950 my-5 mx-2 rounded-md p-5">
            <div class=" flex flex-wrap justify-between">
                {{-- card --}}
                <div class="w-96 bg-gray-100 my-5 rounded-lg">
                    <div>
                        <h3 class="uppercase text-lg mx-2 font-semibold h-12 flex border-b-2  items-center ">
                            Blogs activity
                        </h3>
                    </div>
                    <div class="text-gray-400">
                        @foreach ($BlogUsers as $Bloguser)
                            <div class=" flex justify-between border-b-2 rounded-lg">
                                <a class=" m-2" href="{{ route('blog.show', $Bloguser->id) }}">
                                    <span>{{ $Bloguser->title }}</span>
                                </a>
                                <span class="m-2">{{ $Bloguser->user->name }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- end card --}}
                {{-- card --}}
                <div class="w-96 bg-gray-100 my-5 rounded-lg">
                    <div>
                        <h3 class="uppercase text-lg mx-2 font-semibold h-12 flex border-b-2  items-center ">
                            Polls activity
                        </h3>
                    </div>
                    <div class="text-gray-400">
                        @foreach ($PollUsers as $PollUser)
                            <div class=" flex justify-between border-b-2 rounded-lg">
                                {{-- <a class=" m-2" href="{{ route('poll.show', $PollUser->id) }}"> --}}
                                    <span class="m-2">{{ $PollUser->question }}</span>
                                {{-- </a> --}}
                                <span class="m-2">{{ $PollUser->user->name }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- end card --}}
                {{-- card --}}
                <div class="w-96 bg-gray-100 my-5 rounded-lg">
                    <div>
                        <h3 class="uppercase text-lg mx-2 font-semibold h-12 flex border-b-2  items-center ">
                            Quizzes activity
                        </h3>
                    </div>
                    <div class="text-gray-400">
                        @foreach ($QuizUsers as $QuizUser)
                            <div class=" flex justify-between border-b-2 rounded-lg">
                                <a class=" m-2" href="{{ route('quiz.show', $QuizUser->id) }}">
                                    <span>{{ $QuizUser->name }}</span>
                                </a>
                                <span class="m-2">{{ $QuizUser->user->name }}</span>
                            </div>
                        @endforeach
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

        function dropdown1() {
            document.querySelector("#submenu1").classList.toggle("hidden");
        }

        function dropdown2() {
            document.querySelector("#submenu2").classList.toggle("hidden");
        }

        function dropdown3() {
            document.querySelector("#submenu3").classList.toggle("hidden");
        }

        function dropdown4() {
            document.querySelector("#submenu4").classList.toggle("hidden");
        }

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
