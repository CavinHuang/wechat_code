<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/29 0029
 * Time: 上午 11:48
 */

namespace Frame;

// $this->view = View::make('home', ['article' => Article::first(), 'fuck_me' => 'ok'])->with('title', 'aaaaaaaaaa')->withAbs('cassss')->render();
class Controller {
  public $viewMdl;
  public $request;
  public function __construct () {
    $this->viewMdl = new View();
    $this->request = Request::instance();
  }
  
  public function view($view, $data = []){
    return View::make($view, $data);
  }
  
  public function with ($key, $value) {
    $this->viewMdl->with($key, $value);
    return $this;
  }
  
  public function ajax($code = 2000, $msg = "", $resData = [],$url = '', $httpCode= 200, $header = [], $options = []) {
    $data = [
      "code" => $code,
      "msg" => $msg,
      'url' => $url,
      "data" => $resData
    ];
    return Response::create($data, 'json', $httpCode, $header, $options)->send();
  }
}
