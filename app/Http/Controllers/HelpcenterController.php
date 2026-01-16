<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpcenterController extends Controller
{
    public function faq()
    {
        return view('helpcenter/faq');
    }
}
