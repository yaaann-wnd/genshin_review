<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Erzy | Waiting List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="font-body px-3 flex justify-center items-center overflow-hidden"
    style="background-image: url('{{ asset('images/furina.webp') }}')">

    @if (session()->has('success'))
        <div id="toast-simple"
            class="flex items-center w-full max-w-xs p-4 space-x-4 rounded-lg shadow text-sky-400 divide-x divide-gray-700 space-x bg-gray-800 fixed top-5 right-5"
            role="alert">
            <svg class="w-5 h-5 text-sky-400 rotate-45" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 18 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 17 8 2L9 1 1 19l8-2Zm0 0V9" />
            </svg>
            <div class="pl-4 text-xs pesan">{{ session('success') }}</div>
        </div>
    @endif

    <img src="{{ asset('images/chibi.png') }}" alt="" class="chibi">
    <img src="{{ asset('images/chibi2.png') }}" alt="" class="chibi-2">
    <div class="form-wrapper rounded-lg">
        <div class="rounded-lg p-5 gap-3 overflow-hidden bg-gray-800" id="form-wrapper">
            <div class="gambar rounded-lg overflow-hidden"
                style="background-image: url('{{ asset('images/furina-card.webp') }}')">
            </div>
            <div class="form-review">
                <div class="mb-10 md:mb-7 text-center text-3xl md:text-4xl text-white">
                    <h4>Waiting List</h4>
                </div>
                <form class="mt-5" action="{{ route('waiting_list.store') }}" method="POST">
                    @csrf
                    <div class="mb-6 relative">
                        <label for="genshin_uid" class="block mb-2 text-sm text-white">Genshin
                            UID</label>
                        <input type="text" id="genshin_uid"
                            class="border text-sm rounded-lg block w-full p-2.5 {{ $errors->has('genshin_uid') ? 'text-red-500 placeholder-red-500 focus:ring-red-500 bg-gray-700 focus:border-red-500 border-red-400' : 'bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-sky-400 focus:border-sky-500' }}"
                            placeholder="Masukkan Genshin UID" name="genshin_uid" value="{{ old('genshin_uid') }}">
                        @error('genshin_uid')
                            <p class="mt-2 text-red-500 error absolute left-0">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6 relative">
                        <label for="tiktok_name" class="block mb-2 text-sm text-white">Tiktok</label>
                        <input type="text" id="tiktok_name"
                            class="border text-sm rounded-lg block w-full p-2.5 {{ $errors->has('tiktok_name') ? 'text-red-500 placeholder-red-500 focus:ring-red-500 bg-gray-700 focus:border-red-500 border-red-400' : 'bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-sky-400 focus:border-sky-500' }}"
                            placeholder="Masukkan Akun Tiktok" name="tiktok_name" value="{{ old('tiktok_name') }}">
                        @error('tiktok_name')
                            <p class="mt-2 text-xs text-red-500 error absolute left-0">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="chara" class="block mb-2 text-sm text-white">Character</label>
                        <select id="chara"
                            class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-sky-400 focus:border-sky-500"
                            name="chara">
                            @foreach ($karakter as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full text-center">
                        <button type="submit"
                            class="text-white focus:ring-4 flex justify-center items-center gap-2   focus:outline-none rounded-lg text-sm w-full px-5 py-2.5 text-center bg-sky-400 hover:bg-sky-600 focus:ring-sky-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-send" viewBox="0 0 16 16">
                                <path
                                    d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                            </svg>Kirim Cuy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <img src="{{ asset('images/chibi3.webp') }}" alt="" class="paimon absolute">

    <div class="credit mb-5 px-3">
        <p>Erzy Waiting List</p>
        <p>Dibuat oleh yaann.psd & Erzy</p>
    </div>



    <script>
        let body = document.querySelector('body');
        let ukuran_layar = window.innerWidth;

        if (ukuran_layar > 830) {
            body.style.cssText = "background-image: url('{{ asset('images/furina-laptop (2).webp') }}')";
        } else {
            body.style.cssText = "background-image: url('{{ asset('images/furina.webp') }}')";
        }
    </script>
</body>

</html>
