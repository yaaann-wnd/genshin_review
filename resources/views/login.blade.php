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

<body class="font-body">
    <div class="flex flex-col justify-center items-center min-h-screen gap-y-5">
        <h1 class="text-6xl text-sky-400">You're not supposed to be here!</h1>
        <span class="text-gray-400 desc text-center">This page can only be accessed by Erzy and Tiyan, if you're one of
            his
            viewers or just a weird random person wandering around, please go back to where you came from.</span>
        <div class="grid grid-cols-2 gap-3 curious">
            <div class="flex flex-col">
                <span class="text-gray-400 text-xs text-justify">But if you're still curious about what's gonna happened
                    next and
                    trying to access the Main Waiting List page, please insert the password.</span>
                <div class="flex justify-end self-end gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#9ca3af"
                        class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#9ca3af"
                        class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#9ca3af"
                        class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                    </svg>
                </div>
            </div>
            <form action="" method="post"
                class="bg-gray-800 py-3 ps-3 pe-5 box-border rounded-lg bg-opacity-30 border border-sky-400">
                @csrf
                <div class="mb-2">
                    <label for="password"
                        class="block mb-2 text-sm font-medium text-sky-400">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter the password"
                        class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-800 bg-opacity-30 border-sky-400 placeholder-sky-400 text-sky-400 focus:ring-sky-400 focus:border-sky-400"
                        required="">
                </div>
                <button type="submit" class="w-full text-white focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-sky-400 hover:bg-sky-600 focus:ring-sky-700">Go</button>
            </form>
        </div>
    </div>
</body>

</html>
