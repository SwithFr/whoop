<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about()
    {
        return "about";
    }

    public function home()
    {
        return view('pages.home');
    }
}