<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Home';
        return view('pages.index')->with('title', $title);
    }
    public function events()
    {
        $title = 'Events';
        return view('pages.events')->with('title', $title);
    }
    public function gallery()
    {
        $title = 'Gallery';
        return view('pages.gallery')->with('title', $title);
    }
}
