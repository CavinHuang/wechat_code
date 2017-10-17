<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/29 0029
 * Time: 上午 11:59
 */
namespace App\controllers\home;

class Index extends HomeBase {
  
  public function index(){
    
    return $this->view('home.index')->render();
  }


}
