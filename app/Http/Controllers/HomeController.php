<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.profile');
    }

    public function api()
    {
        return view('front.api');
    }
}
