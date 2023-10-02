@extends('layouts.admin')

@section('content')
    <main class="bg-gray-900 ml-2 w-screen">
        <div class="bg-white w-1/2 mx-auto my-5 rounded-xl">
            <h2 class="border-b-2 uppercase text-xl p-2 font-semibold">Polls list</h2>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 ">

                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b-2 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Polls name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                User
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Polls as $Poll)
                            <tr class="bg-white border-b  ">
                                <th scope="row" class="px-6 py-4 font-semibold ">
                                    {{ $Poll->question }}
                                </th>
                                <td class="px-6 py-4 font-semibold">
                                    {{ $Poll->user->name }}
                                </td>
                                <td class="px-6 py-4">
                                    <form class="inline" action="{{ route('poll.destroy', $Poll->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                            Delete</button>
                                    </form>
                                    @if ($Poll->suspended)
                                        <button type="button"
                                            class="text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 publish-button"
                                            data-blog-id="{{ $Poll->id }}">
                                            Suspended
                                        </button>
                                    @else
                                        <button type="button"
                                            class="text-white bg-yellow-500 hover:bg-yellow-600 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 unpublish-button"
                                            data-blog-id="{{ $Poll->id }}">
                                            Suspend
                                        </button>
                                    @endif
                                    {{-- MODAL --}}
                                    <div id="unpublishModal" tabindex="-1" aria-hidden="true"
                                        class="modal fixed inset-0 flex items-center justify-center hidden bg-gray-500 bg-opacity-50">
                                        <div class="relative w-full max-w-md max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button"
                                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="authentication-modal">
                                                    <svg class="w-3 h-3 close" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="px-6 py-6 lg:px-8">
                                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                        Suspended Form</h3>
                                                    <form method="POST" id="unpublishForm" class="space-y-6"
                                                        action="{{ route('adminBlog.suspended', ['category' => 'polls', 'id' => '__ID__']) }}">
                                                        @csrf
                                                        @method('POST')
                                                        <div>
                                                            <label for="message"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                                                message</label>
                                                            <textarea id="message" rows="4" name="reason"
                                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                                                placeholder="Write the reason why you are suspending..."></textarea>
                                                        </div>
                                                        <div class="flex">
                                                            <div class="flex items-start">
                                                                <div class="flex items-center h-5">
                                                                    <input id="check" type="checkbox" name="check"
                                                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 "
                                                                        required>
                                                                </div>
                                                                <label for="check"
                                                                    class="ml-2 text-sm font-medium text-gray-900">Are
                                                                    you
                                                                    sure
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Send
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- MODAL2 --}}
                                    <div id="publishModal"
                                        class="modal fixed inset-0 flex items-center justify-center hidden bg-gray-500 bg-opacity-50">
                                        <div class="relative w-full max-w-md max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button"
                                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="authentication-modal">
                                                    <svg class="w-3 h-3 close2" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                </button>
                                                <div class="px-6 py-6 lg:px-8">
                                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                        UnSuspended Form</h3>
                                                    <form method="POST" id="publishForm" class="space-y-6"
                                                        action="{{ route('adminBlog.unsuspended', ['category' => 'polls', 'id' => '__ID__']) }}">
                                                        @csrf
                                                        @method('POST')
                                                        <div class="flex">
                                                            <div class="flex items-start">
                                                                <div class="flex items-center h-5">
                                                                    <input id="check" type="checkbox" name="check"
                                                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 "
                                                                        required>
                                                                </div>
                                                                <label for="check"
                                                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Are
                                                                    you
                                                                    sure
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Send
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                        Send a warning
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script>
        var unpublishButtons = document.querySelectorAll('.unpublish-button');

        // Priskirkite kiekvienam mygtukui paspaudimo įvykį
        unpublishButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Gauti Blog'o ID iš atributo data-blog-id
                var blogId = button.getAttribute('data-blog-id');

                var form = document.getElementById('unpublishForm');
                var action = form.getAttribute('action').replace('__ID__', blogId);
                form.setAttribute('action', action);

                // Atidaryti modalą
                document.getElementById('unpublishModal').classList.remove('hidden');
            });
        });

        // Uždaryti modalą, kai paspaudžiamas "close" elementas
        document.querySelector('.close').addEventListener('click', function() {
            document.getElementById('unpublishModal').classList.add('hidden');
        });

        // Uždaryti modalą, kai paspaudžiamas bet kuris kitas langas
        window.addEventListener('click', function(event) {
            if (event.target == document.getElementById('unpublishModal')) {
                document.getElementById('unpublishModal').classList.add('hidden');
            }
        });

        var publishButtons = document.querySelectorAll('.publish-button');

        // Priskirkite kiekvienam mygtukui paspaudimo įvykį
        publishButtons.forEach(function(button) {

            button.addEventListener('click', function() {
                // Gauti Blog'o ID iš atributo data-blog-id
                var blogId = button.getAttribute('data-blog-id');
                var form = document.getElementById('publishForm');
                var action = form.getAttribute('action').replace('__ID__', blogId);

                form.setAttribute('action', action);

                // Atidaryti modalą
                document.getElementById('publishModal').classList.remove('hidden');
            });
        });

        // Uždaryti modalą, kai paspaudžiamas "close" elementas
        document.querySelector('.close2').addEventListener('click', function() {
            document.getElementById('publishModal').classList.add('hidden');
        });

        // Uždaryti modalą, kai paspaudžiamas bet kuris kitas langas
        window.addEventListener('click', function(event) {
            if (event.target == document.getElementById('publishModal')) {
                document.getElementById('publishModal').classList.add('hidden');
            }
        });
    </script>
@endsection
