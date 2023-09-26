@extends('wrapper')

@section('content')
    <div>
        <h1 class="text-4xl text-white">Waiting List</h1>
    </div>
    @if (count($list) >= 1)
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
                                    <form action="{{ route('waiting_list.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="focus:outline-none text-white focus:ring-4 rounded-lg px-3 py-2 bg-red-600 hover:bg-red-700 focus:ring-red-900">Hapus
                                            antrian
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endsection
