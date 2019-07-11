@extends('layout')

@section('content')


<div class = "container-fluid bg-primary">
  <h1 class = "mt-5 pt-1 pb-1 mb-5">掲示板<h1>
</div>

  <form method="POST" action="{{ route('bbs') }}">
    @csrf
    <div class = 'form-group'>
      <label for='title'>タイトル</label>
      <input type="text" id ="name" class = "form-control">
    </div>
    <div class = "form-group">
        <label for = 'article'>本文</label>
        <textarea id = "article" class = "form-control"></textarea>
    </div>
    <button type = "submit" class = "btn-primary mb-5">投稿する</button>
  </form>

  <div class ="container-fluid bg-primary pt-3 pb-2">
    @foreach ($posts as $post)
    <div class = "card mb-2 mt-3">
      <div class ="card-heder pl-2">
           {{ $post->id }}   :     {{ $post->title }}
      </div>
      <div class = "card pb-3 pl-3">
         <?= nl2br(htmlspecialchars($post->body)) ?>
      </div>
    </div>
    @endforeach
  </div>
@endsection
