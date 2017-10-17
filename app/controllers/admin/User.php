<?php
/**
 * Created by PhpStorm.
 * User: sujin
 * Date: 2017/10/17 0017
 * Time: 下午 8:19
 */

namespace App\controllers\admin;


class User extends AdminBase {

  public function index () {

    return $this->view('admin.user')->render();
  }

  public function add () {
    return $this->view('admin.user_add')->render();

  }
}