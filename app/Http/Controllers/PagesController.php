<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    //
    public function index()
    {
        $title = "Welcome To Home";
        // return view('pages.index', compact('title'));
        // OR
        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        $title = "Welcome To About";
        return view('pages.about')->with('title', $title);
    }

    public function features()
    {
        $data = array(
            'title' => 'Features',
            'features' => ['Create Post', 'Upload Media'],
        );
        return view('pages.features')->with($data);
    }
}
