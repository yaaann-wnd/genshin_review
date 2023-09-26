@extends('wrapper')

@section('content')
    <div>
        <h1 class="text-4xl text-white">Waiting List</h1>
    </div>
    <div class="list-antrian overflow-y-auto p-3">
        <div class="flex flex-col justify-center items-center gap-3 w-full">
            @foreach ($list as $item)
                <div class="kartu-list w-full md:max-w-2xl">
                    <a href="#" class="block w-full p-3 md:p-6 rounded-lg shadow bg-gray-800 border-gray-700">
                        <div class="isi gap-3">
                            <div class="genshin-data">
                                <div class="field flex flex-col gap-3">
                                    <p class="text-gray-400 ">Genshin UID</p>
                                    <p class="text-gray-400">Tiktok</p>
                                    <p class="text-gray-400">Character</p>
                                </div>
                                <div class="titik-dua flex flex-col gap-3">
                                    <p class="text-gray-400">:</p>
                                    <p class="text-gray-400">:</p>
                                    <p class="text-gray-400">:</p>
                                </div>
                                <div class="isi-field flex flex-col gap-3">
                                    <p class="text-white">{{ $item->genshin_uid }}</p>
                                    <p class="text-white">{{ $item->tiktok_name }}</p>
                                    <p class="text-white">{{ $item->chara }}</p>
                                </div>
                            </div>
                            <div class="tombol-hapus flex items-end justify-end">
                                {{-- <form action="{{ route('waiting_list.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="focus:outline-none text-white focus:ring-4 rounded-lg px-3 py-2 bg-red-600 hover:bg-red-700 focus:ring-red-900">Hapus antrian
                                    </button>
                                </form> --}}
                                <button type="button" data-modal-target="modal-hapus{{ $item->id }}"
                                    data-modal-toggle="modal-hapus{{ $item->id }}"
                                    class="focus:outline-none text-white focus:ring-4 rounded-lg px-3 py-2 bg-red-600 hover:bg-red-700 focus:ring-red-900">
                                    Hapus antrian
                                </button>


                            </div>
                        </div>
                    </a>
                </div>
                {{-- MODAL HAPUS --}}
                <div id="modal-hapus{{ $item->id }}" tabindex="-1"
                    class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <div class="relative rounded-lg shadow bg-gray-700">
                            <button type="button"
                                class="absolute top-3 right-2.5 bg-transparent rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white"
                                data-modal-hide="popup-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-6 text-center">
                                <svg class="mx-auto mb-4 w-12 h-12 text-gray-200" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <h3 class="mb-5 text-md text-gray-400">Are
                                    you sure you want to delete this product?</h3>
                                <form action="{{ route('waiting_list.destroy', $item->id) }}" method="post" class="inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="focus:outline-none inline text-white focus:ring-4 rounded-lg px-5 py-2.5 bg-red-600 hover:bg-red-700 focus:ring-red-900 text-xs tracking-wider" data-modal-hide="modal-hapus{{ $item->id }}">
                                        Iyah, Hapus aja
                                    </button>
                                </form>
                                <button data-modal-hide="modal-hapus{{ $item->id }}" type="button"
                                    class=" focus:ring-4 focus:outline-none rounded-lg border text-xs px-7 py-2.5 focus:z-10 bg-gray-700 text-gray-300 border-gray-500 hover:text-white hover:bg-gray-600 focus:ring-gray-600">Ga dulu</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END MODAL HAPUS --}}
            @endforeach
        </div>
    </div>
@endsection
