<?php
namespace App\config;
use NoahBuscher\Macaw\Macaw as route;

////////////////////////////////////////////////////////
///  后台管理
/// ///////////////////////////////////////////////////

route ::get('/admin', 'admin\Index@index');
route ::get('/admin/main', 'admin\Index@main');
route::get('/admin/site', 'admin\Site@index');
route::get('/admin/user', 'admin\User@index');
route::get('/admin/user/add', 'admin\User@add');



route::get('', 'home\Index@index');

route::get('fuck', function() {
  echo "成功！";
});

route::$error_callback = function() {
  throw new \Exception("路由无匹配项 404 Not Found");
};

route::dispatch();
