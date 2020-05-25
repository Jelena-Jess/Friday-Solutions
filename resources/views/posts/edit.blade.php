@extends('layouts.app')

@section('title', 'Edit: '.$post->title)

@section('content')
<main role="main" class="m-auto">

  <section class="bg-light">
    <div class="mx-5 py-5">
      <h1 class="text-center">EDIT THE POST</h1>
      
      <div class="separator">
        <div class="line line-left"></div>
        <div class="asterisk"><i class="fas fa-circle"></i></div>
        <div class="line line-right"></div>
      </div>

      {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
      <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" class="form-control">
          @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
          @endforeach
        </select>
      </div>
        <div class="form-group">
          {{Form::label('title', 'Title')}}
          {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
          {{Form::label('body', 'Body')}}
          {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body text'])}}
        </div>
        <div class="form-group">
          {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method', 'PATCH')}}
        {{Form::submit('Submit', ['class' => 'btn'])}}
      {!! Form::close() !!}

    </div>
  </section>
  
  </main>
    
@endsection