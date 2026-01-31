<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home/index');
    }

    public function indexFive()
    {
        return view('home/indexFive');
    }

    public function indexFour()
    {
        return view('home/indexFour');
    }

    public function indexSix()
    {
        return view('home/indexSix');
    }

    public function indexThree()
    {
        return view('home/indexThree');
    }

    public function indexTwo()
    {
        return view('home/indexTwo');
    }
    public function login()
    {
        return view('login');
    }

    public function tos()
    {
        return view('tos');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function refund()
    {
        return view('refund');
    }

}
