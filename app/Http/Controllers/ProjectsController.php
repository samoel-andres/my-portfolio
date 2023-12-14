<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Show the projects section.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('projects.index');
    }

    /**
     * Show project detail.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function citasweb()
    {
        return view('projects.pages.citasweb');
    }

    /**
     * Show project detail.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function citasapi()
    {
        return view('projects.pages.citasapi');
    }

    /**
     * Show project detail.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blog()
    {
        return view('projects.pages.blog');
    }
}
