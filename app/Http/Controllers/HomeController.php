<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function jewellery()
    {
        return view('jewellery');
    }

    public function fashion()
    {
        return view('fashion');
    }

    public function electronics()
    {
        return view('electronic');
    }
}