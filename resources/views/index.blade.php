@extends('layout')

@section('content')
<div class="jumbotron jumbotron-extend">
  <div class="container-fluid jumbotron-container">
    <span class = "display-1 mb-20">Portfolio</span>
    <br>
    <br>
    <p>４０歳でIT業界にキャリアチェンジしたい。</p>
    <p>という野望を持ちつつ、会社辞めちゃった無職おじさんのサイト<p/>
    <p><a class="btn btn-black" href="#" role="button">CONTACT ME</a></p>
  </div>
</div>

<!-- img src="{{ asset('img/books.jpg') }}" class = "w-5 img-fluid center-block" -->
<table><tr><td>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{asset('img/water.png')}}" alt="カードの画像">
  <div class="card-body">
    <h5 class="card-title">>自己紹介</h5>
    <p class="card-text">４０歳無職、就職活動中です。情報系の学科卒です。IT業界未経験ですが拾っていただける企業を探しています。</p>
  </div>
</div>
</td><td>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{asset('img/water.png')}}" alt="カードの画像">
  <div class="card-body">
    <h5 class="card-title">>スキル</h5>
    <p class="card-text">構文だけならC言語、C++、JAVA、PHP、Ruby、Pythonなど理解できます。<br>
    前職では、VBAでマクロをひたすら組んでました。Action Scriptで教材を作成してたこともあります</br>
    現在はLaravelを学習中です。このサイトもLaravelで作っています。</br></p>
  </div>
</div>
</td></tr></table>


@endsection
