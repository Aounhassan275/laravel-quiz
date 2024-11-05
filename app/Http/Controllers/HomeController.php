<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function newGetRoute()
    {
        return view('get_new_route');
    }
}
