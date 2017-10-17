<?php
/**
 * Created by PhpStorm.
 * User: sujin
 * Date: 2017/10/17 0017
 * Time: 下午 7:24
 */

namespace App\controllers\admin;


use App\controllers\admin\AdminBase;

class Index extends AdminBase {


  public function index () {

    return $this->view('admin.index')->render();
  }

  public function main () {

    return $this->view('admin.main')->render();
  }
}