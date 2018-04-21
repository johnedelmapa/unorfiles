<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'The UNO-R Files';
        return view('pages.index', compact('title'));
    }

    public function about() {
        $about = 'About Us';
        return view('pages.about')->with('title', $about);
    }

    public function services() {

        $data = array(
            'title' => 'Services',
            'services' => ['Web design', 'Programming', 'SEO']         
        );

        return view('pages.services')->with($data);
    }
}
