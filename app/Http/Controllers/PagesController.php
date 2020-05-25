<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('pages.index', compact('posts'));
        }

     public function projects(){
        $title='Projects';
        return view('pages.projects', compact('title'));
        }

    public function project1(){
        $title='Electronic diary for schools';
        return view('pages.project1', compact('title'));
        }

    public function project2(){
        $title='ChocoTale';
        return view('pages.project2', compact('title'));
        }

    public function project3(){
        $title="Sonya's Kitchen";
        return view('pages.project3', compact('title'));
        }
    
    public function website(){
        $title='Web design & dev';
        return view('pages.website', compact('title'));
        }

    public function logo(){
        $title='Logo Design';
        return view('pages.logo', compact('title'));
        }

    public function content(){
        $title='Content management';
        return view('pages.content', compact('title'));
        }

    public function about(){
        $title='About us';
        return view('pages.about', compact('title'));
        }

    public function blog_coding(){
        $title='Posts on coding';
        $posts = Post::coding()->paginate(3);
        return view('pages.blog_coding', compact('title', 'posts'));
        }
    public function blog_design(){
        $title='Posts on web design';
        $posts = Post::design()->paginate(3);
        return view('pages.blog_design', compact('title', 'posts'));
        }
    public function blog_inspiration(){
        $title='Posts to insire you';
        $posts = Post::inspiration()->paginate(3);
        return view('pages.blog_inspiration', compact('title', 'posts'));
        }
        
}


