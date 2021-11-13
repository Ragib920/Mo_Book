<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function indexView()
    {
        return view('web_components.index');
    }
}
