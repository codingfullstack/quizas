<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/quiz.png') }}" />

    <title>{{ config('app.name', 'Quiz') }}</title>


    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

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
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
                onclick="dropdown1()">
                <div class="flex justify-between w-full items-center">
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Quiz</span>
                </div>
            </div>
            <div class="text-left text-sm mt-2 w-4/5 mx-auto hidden text-gray-200 font-bold" id="submenu1">
                <h5 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                    <a href="{{ route('quiz.create') }}"> Create</a>
                </h5>
                <h5 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                    <a href="">Edit</a>
                </h5>
                <h5 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                    <a href="{{ route('quiz.index') }}">View</a>
                </h5>
            </div>
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
                onclick="dropdown2()">
                <div class="flex justify-between w-full items-center">
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Poll</span>
                </div>
            </div>
            <div class="text-left text-sm mt-2 w-4/5 mx-auto hidden text-gray-200 font-bold" id="submenu2">
                <h5 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                    <a href="{{ route('poll.create') }}"> Create</a>
                </h5>
                <h5 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                    <a href="">Edit</a>
                </h5>
                <h5 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                    <a href="{{ route('poll.index') }}">View</a>
                </h5>
            </div>
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
                onclick="dropdown3()">
                <div class="flex justify-between w-full items-center">
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Blog</span>
                </div>
            </div>
            <div class="text-left text-sm mt-2 w-4/5 mx-auto hidden text-gray-200 font-bold" id="submenu3">
                <h5 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                    <a href="{{ route('blog.create') }}"> Create</a>
                </h5>
                <h5 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                    <a href="">Edit</a>
                </h5>
                <h5 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                    <a href="{{ route('blog.index') }}">View</a>
                </h5>
            </div>
            <div class="my-4 bg-gray-600 h-[1px]"></div>
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
                onclick="dropdown4()">
                <div class="flex justify-between w-full items-center">
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Users</span>
                </div>
            </div>
            <div class="text-left text-sm mt-2 w-4/5 mx-auto hidden text-gray-200 font-bold" id="submenu4">
                <h5 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                    <a href="{{ route('admin.users') }}"> View</a>
                </h5>
            </div>
            <div
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <i class="bi bi-box-arrow-in-right"></i>
                <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
            </div>
        </div>
        @yield('content')
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @livewireScripts
</body>

</html>
