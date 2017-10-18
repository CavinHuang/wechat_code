<?php
/**
 * Created by PhpStorm.
 * User: sujin
 * Date: 2017/10/17 0017
 * Time: 下午 8:01
 */

namespace App\controllers\admin;
use \App\models\Site as SiteMdl;

class Site extends AdminBase {

  public function index () {
    $site = SiteMdl::find(1);
    return $this->view('admin.site', ['site' => $site])->render();
  }
  
  public function dopost () {
    $data = $this->request->post();
    
    if(isset($data['file'])) {
      unset($data['file']);
    }
    
    $res = SiteMdl::where('id', 1)->update($data);
    
    if($res) {
      $this->ajax(2000, '操作成功');
    }else{
      $this->ajax(4000, '操作失败');
    }
  }
}
