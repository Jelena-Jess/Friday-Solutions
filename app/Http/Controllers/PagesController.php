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
    
    public function website(){
        $title='B2 First';
        return view('pages.website', compact('title'));
        }

    public function logo(){
        $title='C1 Advanced';
        return view('pages.logo', compact('title'));
        }

    public function content(){
        $title='C2 Proficiency';
        return view('pages.content', compact('title'));
        }

    public function about(){
        $title='About me';
        return view('pages.about', compact('title'));
        }

    public function blog_coding(){
        $title='Exams Info';
        $posts = Post::coding()->orderBy('created_at', 'desc')->paginate(12);
        return view('pages.blog_coding', compact('title', 'posts'));
        }
    public function blog_design(){
        $title='Exams Prep';
        $posts = Post::design()->orderBy('created_at', 'desc')->paginate(12);
        return view('pages.blog_design', compact('title', 'posts'));
        }
    public function blog_inspiration(){
        $title='Ace-your-exam tips';
        $posts = Post::inspiration()->orderBy('created_at', 'desc')->paginate(12);
        return view('pages.blog_inspiration', compact('title', 'posts'));
        }
        
}


