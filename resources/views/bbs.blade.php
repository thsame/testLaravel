@extends('layout')

@section('content')


<div class = "container-fluid bg-primary">
  <h1 class = "mt-5 pt-1 pb-1 mb-5">掲示板<h1>
</div>

  <form>
    <div class = 'form-group'>
      <label for='name'>名前</label>
      <input type="text" id ="name" class = "form-control">
    </div>
    <div class = "form-group">
        <label for = 'article'>本文</label>
        <textarea id = "article" class = "form-control"></textarea>
    </div>
    <button class = "btn-primary mb-5">投稿する</button>
  </form>

  <div class ="container-fluid bg-secondary pt-2 pb-2">
    @foreach ($posts as $post)
    <div class = "card mb-2 pt-2 mt-2">
      <div class ="card-heder">
         {{ $post->id }}   :     {{ $post->title }}
      </div>
      <div class = "inline-block mb-4">
         {{ $post->body }}
      </div>
    </div>
    @endforeach
  </div>
@endsection
