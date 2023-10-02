<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/quiz.png') }}" />

    <title>{{ config('app.name', 'Quiz') }}</title>


    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @keyframes fadein {
            0% {
                opacity: 0;
            }

            66% {
                opacity: 0.5;
            }

            100% {
                opacity: 0.8;
            }
        }

        [x-cloak] {
            display: none;
        }
    </style>
    @livewireStyles
</head>

<body class="font-sans antialiased bg-gray-100 ">

    <div class="flex">
        <div class="sidebar h-screen  p-2 w-[300px] overflow-y-auto text-center bg-gray-900">
            <div class="text-gray-100 text-xl">
                <div class="p-2.5 mt-1 flex items-center">
                    <h1 class="font-bold text-gray-200 text-[15px] ml-3">
                        <a href="{{ route('home') }}">Quizzes</a>
                    </h1>
                </div>
                <div class="my-2 bg-gray-600 h-[1px]"></div>
            </div>
            <a href="{{ route('admin') }}"
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <div class="flex justify-between w-full items-center">
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Dashboard</span>
                </div>
            </a>
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
                onclick="dropdown1()">
                <div class="flex justify-between w-full items-center">
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Quiz</span>
                </div>
            </div>
            <div class="text-left text-sm mt-2 w-4/5 mx-auto hidden text-gray-200 font-bold" id="submenu1">
                <a href="{{ route('quiz.create') }}" class="cursor-pointer block p-2 hover:bg-blue-600 rounded-md mt-1">
                    Create
                </a>
                <a href="{{ route('admin.quizzes') }}"
                    class="cursor-pointer block p-2 hover:bg-blue-600 rounded-md mt-1">
                    All quizzes
                </a>
            </div>
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
                onclick="dropdown2()">
                <div class="flex justify-between w-full items-center">
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Poll</span>
                </div>
            </div>
            <div class="text-left text-sm mt-2 w-4/5 mx-auto hidden text-gray-200 font-bold" id="submenu2">
                <a href="{{ route('poll.create') }}" class="cursor-pointer block p-2 hover:bg-blue-600 rounded-md mt-1">
                    Create
                </a>
                <a href="{{ route('admin.polls') }}" class="cursor-pointer block p-2 hover:bg-blue-600 rounded-md mt-1">
                    All polls
                </a>
            </div>
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
                onclick="dropdown3()">
                <div class="flex justify-between w-full items-center">
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Blog</span>
                </div>
            </div>
            <div class="text-left text-sm mt-2 w-4/5 mx-auto hidden text-gray-200 font-bold" id="submenu3">
                <a href="{{ route('blog.create') }}"
                    class="cursor-pointer block p-2 hover:bg-blue-600 rounded-md mt-1">
                    Create
                </a>
                <a href="{{ route('admin.blogs') }}"
                    class="cursor-pointer block p-2 hover:bg-blue-600 rounded-md mt-1">
                    All blogs
                </a>
            </div>
            <div class="my-4 bg-gray-600 h-[1px]"></div>
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
                onclick="dropdown4()">
                <div class="flex justify-between w-full items-center">
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Users</span>
                </div>
            </div>
            <div class="text-left text-sm mt-2 w-4/5 mx-auto hidden text-gray-200 font-bold" id="submenu4">
                <a href="{{ route('admin.users') }}" class="cursor-pointer block p-2 hover:bg-blue-600 rounded-md mt-1">
                    View
                </a>
            </div>
            <form method="POST" action="{{ route('logout') }}"
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                @csrf
                <button type="submit" class="text-[15px] ml-4 text-gray-200 font-bold">Logout</button>
            </form>
        </div>
        @yield('content')
    </div>
    <script type="text/javascript">
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
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @livewireScripts
</body>

</html>
