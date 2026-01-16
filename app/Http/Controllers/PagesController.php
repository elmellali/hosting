<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pageError()
    {
        return view('pages/pageError');
    }

    public function about()
    {
        return view('pages/about');
    }

    public function blog()
    {
        return view('pages/blog');
    }

    public function blogDetails()
    {
        return view('pages/blogDetails');
    }

    public function blogList()
    {
        return view('pages/blogList');
    }

    public function contact()
    {
        return view('pages/contact');
    }

    public function domainChecker(Request $request)
    {
        $domain = $request->input('domain');
        $available = null;

        if ($domain) {
            try {
                $whois = \Iodev\Whois\Factory::get()->createWhois();
                // Combine domain and tld if separate (though our form sends full name in 'domain' mostly)
                // If the user entered just "google" and selected ".com", we might need to combine.
                // For now assuming user entered full domain or we combine it.
                $tld = $request->input('r');
                $fullDomain = $domain;

                if ($tld && !str_contains($domain, '.')) {
                    $fullDomain = $domain . $tld;
                }

                if ($whois->isDomainAvailable($fullDomain)) {
                    $available = true;
                } else {
                    $available = false;
                }
            } catch (\Exception $e) {
                // Handle connection errors or invalid domains
                $available = false;
            }
        }

        return view('pages/domainChecker', ['available' => $available]);
    }

    public function knowledgebase()
    {
        return view('pages/knowledgebase');
    }

    public function pricing()
    {
        return view('pages/pricing');
    }

    public function signin()
    {
        return view('pages/signin');
    }

    public function signup()
    {
        return view('pages/signup');
    }

    public function support()
    {
        return view('pages/support');
    }
}
