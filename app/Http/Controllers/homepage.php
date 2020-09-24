<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class homepage extends Controller
{
    public function index()
    {
        $products =products::all();
        return view('',['products'=>$products]);
    }
}
