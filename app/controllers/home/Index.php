<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/29 0029
 * Time: 上午 11:59
 */
namespace App\controllers\home;

use App\models\Site;

class Index extends HomeBase {
  
  public function index(){
    
    $site = Site::find(1);
    
    return $this->view('home.index', ['site'=>$site])->render();
  }


}
