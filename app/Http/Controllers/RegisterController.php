<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }


    public function store(Request $Request)
    {
        $validatedData = $Request->validate([
            'email' => 'max:255',
            'password' => 'max:255',
            'first_name' => 'max:255',
            'last_name' => 'max:255'
        ]);

        //dd('reg berhasil');
        //return request()->all();
        //return $validatedData;

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/index');

    }


}
