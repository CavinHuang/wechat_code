<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/18 0018
 * Time: 上午 9:36
 */

namespace App\controllers\admin;


use App\controllers\BaseController;

class Login extends BaseController {
  
  public function login () {
    
    
    return $this->view('admin.login')->render();
  }
  
  public function dologin () {
    $data = $this->request->post();
  
    if(isset($data['file'])) {
      unset($data['file']);
    }
  
    if($data['username'] == '' || $data['password'] == '') {
      return $this->ajax(4000, '用户名或者密码不能为空');
    }
  
    $userInfo = \App\models\User::where('username', $data['username'])->first();
  
  
    if($userInfo){
      if(md5($data['password']) != $userInfo->password) {
        return $this->ajax(4000, '密码错误');
      }
    
      $_SESSION['admin_id'] = $userInfo->id;
      $_SESSION['admin_info'] = $userInfo->toArray();
    
      return $this->ajax(2000, '登录成功', '', '/admin');
    }else{
      return $this->ajax(4000, '没有这样的用户');
    }
  
  }
}
