<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

        $dataUser = User::get();
        return view('user', compact('dataUser'));
    }

   public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);
        return redirect()->route('login');
    }



}
