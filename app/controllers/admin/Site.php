<?php
/**
 * Created by PhpStorm.
 * User: sujin
 * Date: 2017/10/17 0017
 * Time: 下午 8:01
 */

namespace App\controllers\admin;


class Site extends AdminBase {

  public function index () {

    return $this->view('admin.site')->render();
  }
}