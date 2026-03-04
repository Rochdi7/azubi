<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontoffice.pages.home');
    }
}
