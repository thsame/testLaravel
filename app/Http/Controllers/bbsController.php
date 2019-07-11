<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class bbsController extends Controller
{
  public function show(){
    $posts = Post::all();// Userモデル（usersテーブル）で一番最初にヒットするデータをコレクションで返す
    return view('bbs',['posts'=>$posts]); //,compact($post));
    }
}
