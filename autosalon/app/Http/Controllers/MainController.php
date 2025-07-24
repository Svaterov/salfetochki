<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
}

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        // логика для главной страницы, если есть
        return view('welcome'); // или другой ваш шаблон
    }

    public function mototechnique()
    {
        // логика для страницы мототехники (можно просто вернуть view)
        return view('mototechnique'); // создадим этот шаблон далее
    }
}
