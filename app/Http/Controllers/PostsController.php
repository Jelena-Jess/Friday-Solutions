<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\Category;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='Blog';
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        $categories = Category::all();
        return view('posts.index', compact('title', 'posts', 'categories'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999',
            'category_id' => 'required',
        ]);

        //Handle file upload
        if($request->hasFile('cover_image')) {
            //Get filename with the extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->category_id = $request->input('category_id');
        $post->save();

        return redirect('/admin')->with('success', 'Post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //Route model binding
        // $post =  Post::find($post);
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        
        return view('posts.show', compact('post', 'posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // $post =  Post::find($id);
        $categories = Category::all();

        // Check for correct user
        if(auth()->user()->id !== $post->user_id) {
            return redirect('/admin')->with('error', 'Unauthorised page');
        }

        return view('posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999',
            'category_id' => 'required',
        ]);

        //Handle file upload
        if($request->hasFile('cover_image')) {
            //Get filename with the extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->category_id = $request->input('category_id');
        $post->user_id = auth()->user()->id;
        if($request->hasFile('cover_image')) {
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/admin')->with('success', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
         // Check for correct user
         if(auth()->user()->id !== $post->user_id) {
            return redirect('/admin')->with('error', 'Unauthorised page');
         }

         if($post->cover_image !== 'noimage.jpg') {
            //Delete image
            Storage::delete('public/cover_images/'.$post->cover_image);
         }

        $post->delete();
        return redirect('/admin')->with('success', 'Post removed');
    }
}
