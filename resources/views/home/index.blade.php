@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<main role="main" class="m-auto">

    <section class="py-5 text-justify bg-light">
        <div class="main">
          <div class="d-flex flex-column align-items-center">
            <div class="animate-top">
              <h1 class="text-center text-dark">Welcome Admin!</h1>
              <h2>Why not write an amazing blog post today?</h2>
            </div>
            <div class="mt-5">
              <a href="/posts/create" class="btn">Create a new post</a>
            </div>
          </div>
        </div>
      </section>

    <div class="row justify-content-center">

    </div>

    <section class="bg-grey">
        <div class="">
            <div class="py-5">
            <h1 class="text-center">YOUR LATEST POSTS</h1>
            
            <div class="separator mb-4">
                <div class="line line-left"></div>
                <div class="asterisk"><i class="fas fa-circle"></i></div>
                <div class="line line-right"></div>
            </div>


            <div class="blog-admin pt-4 d-flex flex-wrap text-align-center justify-content-center">

            @if(count($posts) > 0)
            @foreach($posts as $post)
              
                <div class="blog">
                  <div class="blog-image inner">
                    <a href="/posts/{{$post->id}}"><img src="/storage/cover_images/{{$post->cover_image}}" alt=""></a>
                  </div>
                  <div class="blog-text p-3">
                    <div class="mb-auto d-flex justify-content-between">
                      <p class="small-text-blog"><a href="">{{$post->category->name}}</a></p>
                      <p class="small-text-blog">Author: {{$post->user->name}} </p>
                      <p class="small-text-blog">{{$post->created_at->format('d/m/Y')}}</p>
                    </div>
                    <div class="mb-auto">
                      <h4 class="font-weight-bold pt-3"><a href="{{ route('posts.show', ['post' => $post]) }}">{{$post->title}}</a></h4>
                      <p class="blog-description">{{$post->description}}</a></p>
                    </div>
                   
                    <div class="d-flex row ml-0">
                        <a href="/posts/{{$post->id}}/edit" class="btn mr-3">Edit</a>
                        
                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                          {{Form::hidden('_method', 'DELETE')}}
                          {{Form::submit('Delete', ['class' => 'btn'])}}
                        {!!Form::close()!!}
                    </div>
                  </div>
                </div>
            @endforeach
            </div> 
            {{-- {{$posts->links()}} --}}
            @else
              <p>No posts to show</p>
            @endif
            </div>         
        </div>
    </section>
</main>
@endsection

     