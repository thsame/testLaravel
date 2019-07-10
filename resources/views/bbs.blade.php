@extends('layout')

@section('content')

<div class = "container-fluid bg-primary">
  <h1 class = "pt-100">掲示板<h1>
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
    <button class = "btn-primary">投稿する</button>
  </form>


@endsection
