<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex() {
        $post = Post::find(1);
        echo $post->user->name;
    return view('pages.welcome')->withPost($post);
    }
    public function index(){
        $title = "  Welcome to DropBook !   ";

        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);

    }

    public function about(){
        $title = "About Us";

        //return view('pages.about');
        return view('pages.about')->with('title', $title);
    
    }

    public function donate(){
        $data = array(
            'title' => 'Donate',
            'donate' => ['$30', '$300']
        );

       // return view('pages.services');
        return view('pages.donate')->with($data);
    
    }

}
