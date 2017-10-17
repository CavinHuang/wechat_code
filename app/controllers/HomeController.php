<?php
/**
* \HomeController
*/
namespace App\controllers;
use App\models\Article;
class HomeController extends BaseController
{

  public function home()
  {
    $this->view('home', ['article' => Article::first(), 'fuck_me' => 'ok'])->with('title', 'a手动阀所多撒多撒大所多撒aadasdsadsadaaaaaaa')->withAbs('cassss')->render();

//    Redis::set('key','value',3000,'ms');
//    echo Redis::get('key');
  }
}
