@extends('layouts.app')

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
            <div class="mx-5 py-5">
            <h1 class="text-center">LATEST POSTS</h1>
            
            <div class="separator mb-4">
                <div class="line line-left"></div>
                <div class="asterisk"><i class="fas fa-circle"></i></div>
                <div class="line line-right"></div>
            </div>


            <div class="pt-4 d-flex flex-wrap text-align-center justify-content-center">

            @if(count($posts) > 0)
            @foreach($posts as $post)
              
                <div class="blog">
                  <div class="blog-image inner">
                    <a href="/posts/{{$post->id}}"><img src="/storage/cover_images/{{$post->cover_image}}" alt=""></a>
                  </div>
                  <div class="blog-text p-3">
                  <h3 class="pt-3"><a href="/posts/{{$post->id}}" class="text-dark">{{$post->title}}</a></h3>
                    <p>{!!$post->body!!}</p>
                    <p class="small">{{$post->created_at}}</p>
                    <div class="d-flex row ml-0">
                        <a href="/posts/{{$post->id}}/edit" class="btn mr-3">Edit</a>
                        
                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn'])}}
                        {!!Form::close()!!}
                    </div>
                  </div>
                </div>
              {{-- {{$posts->links()}} --}}
            @endforeach
            </div> 
            @else
              <p>No posts to show</p>
            @endif
            </div>         
        </div>
    </section>
</main>
@endsection