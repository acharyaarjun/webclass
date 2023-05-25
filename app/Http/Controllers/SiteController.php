<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // get HOme ko function
    public function getHome()
    {
        return view('site.home');
    }

    // get About ko fucntion
    public function getAbout()
    {
        return view('site.about');
    }

    public function contact()
    {
        return view('contact');
    }
}
