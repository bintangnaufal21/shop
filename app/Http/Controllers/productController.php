<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class productController extends Controller
{
    public function index(){

        $dataProduct = User::get();
        return view('dataProduct', compact('dataProduct'));
    }

    public function store(request $request){

    }
}
