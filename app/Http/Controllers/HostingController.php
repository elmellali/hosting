<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostingController extends Controller
{

    public function cloudHosting()
    {
        return view('hosting/cloudHosting') ;
    }

    public function dedicatedHosting()
    {
        return view('hosting/dedicatedHosting') ;
    }

    public function resellerHosting()
    {
        return view('hosting/resellerHosting') ;
    }

    public function sharedHosting()
    {
        return view('hosting/sharedHosting') ;
    }

    public function vpsHosting()
    {
        return view('hosting/vpsHosting') ;
    }

    public function wordpressHosting()
    {
        return view('hosting/wordpressHosting') ;
    }

}
