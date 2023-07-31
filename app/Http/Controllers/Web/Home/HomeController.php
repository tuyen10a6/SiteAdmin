<?php

namespace App\Http\Controllers\Web\Home;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.home.index');
    }

    public function index2()
    {
        return view('web.home.edit_product');
    }

    public function login2()
    {
        return view('web.home.login');
    }

    public function sign2()
    {
        return view('web.home.sign');
    }
}