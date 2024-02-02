
@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mt-5" >
        <div class="col-md-8">
        <h1>{{ $posts->title }}</h1>
        <p>By <a href="/blog?author={{ $posts->author->username }}" class="text-decoration-none">{{ $posts->author->name }}</a> in <a href="/blog?category={{ $posts->category->slug }} class = text-decoration-none">{{ $posts->category->name }}</a></p>
        <img src="https://source.unsplash.com/1200x400/?{{ $posts->category->name }}" alt="{{ $posts->category->name }}" class="img-fluid">
        
        <article class="my-3 fs-5"> {!! $posts->body !!}</article>
        
        <a href="/blog" class="d-block mt-3">back to post</a>
    </div>

    </div>
</div>

 

@endsection