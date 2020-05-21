<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('pages.index')->with('posts', $posts);
        }

     public function projects(){
        $title='Projects';
        return view('pages.projects')->with('title', $title);
        }

    public function project1(){
        $title='Electronic diary for schools';
        return view('pages.project1')->with('title', $title);
        }

    public function project2(){
        $title='ChocoTale';
        return view('pages.project2')->with('title', $title);
        }

    public function project3(){
        $title="Sonya's Kitchen";
        return view('pages.project3')->with('title', $title);
        }
    
    public function website(){
        $title='Web design & dev';
        return view('pages.website')->with('title', $title);
        }

    public function logo(){
        $title='Logo Design';
        return view('pages.logo')->with('title', $title);
        }

    public function content(){
        $title='Content management';
        return view('pages.content')->with('title', $title);
        }

    public function about(){
        $title='About us';
        return view('pages.about')->with('title', $title);
        }

    public function blog_coding(){
        $title='Posts on coding';
        return view('pages.blog_coding')->with('title', $title);
        }
    public function blog_design(){
        $title='Posts on web design';
        return view('pages.blog_design')->with('title', $title);
        }
    public function blog_inspiration(){
        $title='Posts to insire you';
        return view('pages.blog_inspiration')->with('title', $title);
        }
        
}


