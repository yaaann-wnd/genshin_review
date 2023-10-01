<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class kunciController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function kunci_proses(Request $request)
    {
        // dd($request->kunci);
        $request->validate(
            [
                'kunci' => 'required'
            ],
            [
                'kunci.required' => 'Password can\'t be empty!',
            ]
        );

        $credentials = $request->only('kunci');

        if (Auth::guard('kunci')->attempt($credentials)) {
            return redirect()->intended(route('list'));
        }

        return redirect(route('login'))->with('error', 'Wrong password you goofy!');
    }
}
