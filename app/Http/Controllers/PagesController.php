<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome';
        return view('pages.index')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'App Development', 'Digital Marketing', 'SEO']
        );
        return view('pages.services')->with($data);
    }

    public function about(){
        $title = 'About';
        return view('pages.about')->with('title', $title);
    }

    public function contact(){
        $title = 'Contact Us';
        return view('pages.contact', compact('title'));
    }
}
