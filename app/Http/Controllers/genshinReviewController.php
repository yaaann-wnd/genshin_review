<?php

namespace App\Http\Controllers;

use App\Models\ReviewGenshin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class genshinReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tampil_list()
    {
        $list_antrian = ReviewGenshin::oldest()->get();
        
        return view('admin.list_antrian', ['list' => $list_antrian]);
    }



    public function index()
    {
        $karakter = ["Albedo", "Alhaitam", "Aloy", "Amber", "Arataki Itto", "Baizhu", "Barbara", "Beidou",  "Bennett", "Candace", "Chongyun", "Collei", "Cyno", "Dehya", "Diluc", "Diona", "Dori", "Eula", "Faruzan", "Fischl", "Freminet", "Ganyu", "Gorou", "Hu Tao", "Jean", "Kaedehara Kazuha", "Kaeya", "Kamisato Ayaka", "Kamisato Ayato", "Kaveh", "Keqing", "Kirara", "Klee", "Kujou Sara", "Kuki Shinobu", "Layla", "Lynette", "Lyney", "Mika", "Mona", "Nahida", "Neuvillette", "Nilou", "Ningguang", "Noelle", "Qiqi", "Raiden Shogun", "Razor", "Rosaria", "Sangonomiya Kokomi", "Sayu", "Shikanoin Heizou", "Sucrose", "Tartaglia", "Thoma", "Tighnari", "Traveler", "Venti", "Wanderer", "Wriothesley", "Xiangling", "Xiao", "Xingqiu", "Xinyan", "Yaemiko", "Yanfei", "Yaoyao", "Yelan", "Yoimiya", "Yunjin", "Zhongli"];

        return view('form_antrian', ['karakter' => $karakter]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'genshin_uid' => 'required|numeric',
                'tiktok_name' => 'required',
                'chara' => 'required',
            ],
            [
                'genshin_uid.required' => 'Genshin UID tidak boleh kosong ya!',
                'genshin_uid.numeric' => 'Bruh, Genshin UID harus angka doang!',
                'tiktok_name.required' => 'Buru-buru amat, ketik dulu Akun Tiktoknya!',
                'chara.required' => 'Harus pilih karakter ya guys!',
            ]
        );

        $create_review_genshin = ReviewGenshin::create($request->all());

        if (!$create_review_genshin) {
            return redirect('waiting_list')->with('error', 'Ara, Data Antrian gagal dibuat!');
        }

        return redirect(route('waiting_list.index'))->with('success', "Hore, Akunmu berhasil masuk di Waiting List!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $antrian = ReviewGenshin::find($id);

        $antrian->delete();

        return redirect(route('list'))->with('success', 'Hore, berhasil menghapus antrian');
    }
}
