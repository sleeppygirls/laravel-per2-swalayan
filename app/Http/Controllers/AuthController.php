<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\User;

class AuthController extends Controller
{
    function showLogin()
    {
        // dd("TEST");
        return view('login');
    }

    function actionLogin(Request $req)
    {
        // dd($req);
        $dataLogin = [
            'email' => $req->input('email'),
            'password' => $req->input('password'),
        ];
        // dd($dataLogin);

        if (Auth::attempt($dataLogin)) {
            return redirect('/');
        } else {
            dd($req);
            return back();
        }
    }

    function actionLogout()
    {
        Auth::logout();

        return redirect('login');
    }

    function generateData()
    {
        User::create([
            'id' => 'C001',
            'name' => 'Putri',
            'email' => 'lalalatte2344@gmail.com',
            'email_verified_at' => now(),
            'password' => '2344',
            'remember_token' => Str::random(10),
        ]);
    }
}
