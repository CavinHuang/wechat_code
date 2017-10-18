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
  
  public function upload () {
    $file = $this->request->file();
    $path =  '/upload/';
    $info = $file[ 'file' ]->move(PUBLIC_PATH . $path );
    if ( $info ) {
      $path = WEB_DOMAIN. $path . $info->getSaveName();
      $data = [ 'code' => 0, 'data' => [ 'filepath' => $path, 'preview_url' => $path, 'src' => $path, ], 'msg' => '上传成功', ];
    }else{
      $data = [ 'code' => 1, 'data' => [ 'filepath' => $path, 'preview_url' => $path, 'src' => $path, ], 'msg' => '上传失败', ];
    }
    return \Frame\Response::create($data, 'json')->send();
  }
}
