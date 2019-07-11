<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'title' => '投稿のタイトル',
        'body' => "本文1234567459754516414321461645あｓｄｄ；ぁｆｋｄｓｄか；ｓｌｄｋｆ：あｓｌｄｋｆ；あｌｓｄｋｆ；ぁｋｆ：；ぁ\n。",
    ];
    ];
});
