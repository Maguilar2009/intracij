<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeIntranetController extends Controller
{  
    public function index()
    {
        return view('homeIntranet');
    }
}