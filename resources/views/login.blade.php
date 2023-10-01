<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Who are you?</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ 'css/style-login.css' }}">
</head>

<body class="font-body dark">
    @if (session()->has('error'))
        <div id="toast-simple"
            class="flex items-center w-full max-w-xs p-4 space-x-4 rounded-lg shadow text-red-500 divide-x divide-gray-700 space-x bg-gray-800 fixed top-5 left-5 border border-red-500"
            role="alert">
            <svg class="w-6 h-6 text-red-500 dark:text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <div class="pl-4 text-xs pesan">{{ session('error') }}</div>
        </div>
    @endif
    @error('kunci')
        <div id="toast-simple2"
            class="flex items-center w-full max-w-xs p-4 space-x-4 rounded-lg shadow text-red-500 divide-x divide-gray-700 space-x bg-gray-800 fixed top-5 left-5 border border-red-500"
            role="alert">
            <svg class="w-6 h-6 text-red-500 dark:text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <div class="pl-4 text-xs pesan">{{ $message }}</div>
        </div>
    @enderror
    <div class="flex flex-col justify-center items-center min-h-screen gap-y-5">
        <p class="text-5xl text-sky-400">Boy, you're not supposed to be here!</p>
        <span class="text-white desc text-center text-sm">This page can only be accessed by Erzy and Tiyan, if you're
            one of
            his
            viewers or just a weird random person wandering around, please go back to where you came from.</span>
        <div class="flex gap-2">
            <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-sky-400 dark:hover:bg-sky-600 focus:outline-none  dark:focus:ring-sky-600">Go
                back</button>
            <button type="button" data-modal-target="modal-login" data-modal-toggle="modal-login"
                class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-sky-400 dark:text-sky-400 dark:hover:text-white dark:hover:bg-sky-400 dark:focus:ring-blue-800">Nah,
                I still want to continue</button>
        </div>
    </div>

    <!-- Main modal -->
    <div id="modal-login" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-sky-950 border-sky-400 border">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-sky-700 dark:hover:text-white"
                    data-modal-hide="modal-login">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <div class="flex flex-col gap-2 items-center">
                        <h3 class="mb-4 text-xl text-gray-900 dark:text-white text-center">Enter the goddamn password
                        </h3>

                    </div>
                    <form class="space-y-6" action="{{ route('login.proses') }}" method="POST">
                        @csrf
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="kunci" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-400 focus:border-sky-500 block w-full p-2.5 dark:bg-sky-950 dark:border-sky-700 dark:placeholder-gray-400 dark:text-white">
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-400 dark:hover:bg-sky-600 dark:focus:ring-blue-700">Continue</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
