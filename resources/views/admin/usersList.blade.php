@extends('layouts.admin')

@section('content')
    <main class="bg-gray-900 ml-2 w-screen">
        <div class="bg-white w-1/2 mx-auto my-5 rounded-xl">
            <h2 class="border-b-2 uppercase text-xl p-2 font-semibold">Users list</h2>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 ">

                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b-2 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                User name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Permissions
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Users as $User)
                            <tr class="bg-white border-b  ">
                                <th scope="row" class="px-6 py-4 font-semibold ">
                                    {{ $User->name }}
                                </th>
                                <td class="px-6 py-4 font-semibold">
                                    {{ $User->is_admin === 1 ? 'Admin' : 'User' }}
                                </td>
                                <td class="px-6 py-4">
                                    @if (Auth::user()->id === $User->id)
                                        <button type="submit"
                                            class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                            Permission
                                        </button>
                                    @else
                                        <form method="POST" action="{{ route('adminUser', $User->id) }}">
                                            @csrf
                                            @method('POST')
                                            <button type="submit"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">Make
                                                {{ $User->is_admin === 1 ? 'User' : 'Admin' }}
                                                Permission</button>
                                        </form>
                                    @endif

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
