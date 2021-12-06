<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('layout');
    }

    public function about()
    {
        return view('about');
    }

    public function accomodation()
    {
        return view('accomodation');
    }
    
    public function blog()
    {
        return view('blog');
    }
    
    public function blog_single()
    {
        return view('blog-single');
    }
    
    public function contact()
    {
        return view('contact');
    }
    
    public function elements()
    {
        return view('elements');
    }
    
    public function gallery()
    {
        return view('gallery');
    }
}
