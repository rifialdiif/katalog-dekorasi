<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landingPage()
    {
        return view('frontend.landingPage');
    }

    public function productKatalog()
    {
        return view('frontend.productKatalog');
    }
}
