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
  public function __construct () {
    $this->viewMdl = new View();
  }
  
  public function view($view, $data = []){
    return View::make($view, $data);
  }
  
  public function with ($key, $value) {
    $this->viewMdl->with($key, $value);
    return $this;
  }
}
