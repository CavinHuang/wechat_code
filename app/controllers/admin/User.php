<?php
/**
 * Created by PhpStorm.
 * User: sujin
 * Date: 2017/10/17 0017
 * Time: 下午 8:19
 */

namespace App\controllers\admin;

use App\models\User as UserMdl;

class User extends AdminBase {

  public function index () {
    $list = UserMdl::get();
    return $this->view('admin.user', ['list' => $list])->render();
  }

  public function add ($id = 0) {
    $user = UserMdl::find($id);
    return $this->view('admin.user_add', ['user' => $user])->render();
  }
  
  public function dopost () {
    $data = $this->request->post();
    
    if(isset($data['file'])) {
      unset($data['file']);
    }
    
    if(isset($data['password']) && isset($data['confirm_password']) && $data['password'] != '' && $data['confirm_password'] != '') {
      if($data['confirm_password'] != $data['password']) {
        $this->ajax(4000, '两次密码不一样');
      }else{
        $data['password'] = md5($data['password']);
      }
    }else{
      unset($data['password']);
    }
    unset($data['confirm_password']);
    
    if(isset($data['id'])) {
      $res = UserMdl::where('id', $data['id'])->update($data);
    }else{
      $res = UserMdl::create($data);
    }
    
    if($res) {
      $this->ajax(2000, '操作成功');
    }else{
      $this->ajax(4000, '操作失败');
    }
  }
}
