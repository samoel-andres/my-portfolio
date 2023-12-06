<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Show the about section.
     * 
     * @return \Illuminate\Contract\Support\Renderable
     */
    public function index()
    {
        return view('about.index');
    }
}
