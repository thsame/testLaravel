@extends('layout')

@section('content')
<div class="jumbotron jumbotron-extend">
  <div class="container-fluid jumbotron-container">
    <span class = "display-1 ">Portfolio</span>

    <p></p>
    <p><p/>
    <p><a class="btn btn-black " href="#" role="button">CONTACT ME</a></p>
  </div>
</div>

<!-- img src="{{ asset('img/books.jpg') }}" class = "w-5 img-fluid center-block" -->
<div class = "card-deck">
  <div class="card" style="width: 18rem; hight = 100rem;">
    <img class="card-img-top" src="{{asset('img/water.png')}}" alt="カードの画像">
    <div class="card-body">
      <h5 class="card-title">自己紹介</h5>
      <p class="card-text">４０歳無職、就職活動中です。情報系の学科卒です。IT業界未経験です</p>
    </div>
  </div>
  <div class="card" style="width: 18rem; hight = 100rem;">
    <img class="card-img-top" src="{{asset('img/water.png')}}" alt="カードの画像">
    <div class="card-body">
      <h5 class="card-title">スキル</h5>
      <p class="card-text">構文だけならC言語、C++、JAVA、PHP、Ruby、Pythonなど理解できます。<br>
      前職では、VBAでマクロをひたすら組んでました。Action Scriptで教材を作成してたこともあります</br>
      現在はLaravelを学習中です。このサイトもLaravelで作っています。</br></p>
    </div>
  </div>
  <div class="card" style="width: 18rem; hight = 100rem;">
    <img class="card-img-top" src="{{asset('img/water.png')}}" alt="カードの画像">
    <div class="card-body">
      <h5 class="card-title">練習</h5>
      <p class="card-text">
      <a class="btn btn-info" href="/bbs.php" role="button">簡易BBS</a></p>
    </div>
  </div>
  <div class="card" style="width: 18rem; hight = 100rem;">
    <img class="card-img-top" src="{{asset('img/water.png')}}" alt="カードの画像">
    <div class="card-body">
      <h5 class="card-title">作品1</h5>
      <p class="card-text">準備中</br></p>
      <p><a class="btn btn-info" href="#" role="button">taxi app</a></p>
    </div>
  </div>
</div>


@endsection
