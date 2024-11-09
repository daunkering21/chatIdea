<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function loadPage($page)
    {
        return view('front.'.$page);
    }
}
