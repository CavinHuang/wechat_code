<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>登录--layui后台管理模板</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/admin/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="/static/admin/css/login.css" media="all" />
</head>
<body>

<div class="video_mask"></div>
<div class="login">
    <h1>layuiCMS-管理登录</h1>
    <form class="layui-form" action="/dologin" method="post">
        <div class="layui-form-item">
            <input class="layui-input" name="username" placeholder="用户名" lay-verify="required" type="text" autocomplete="off">
        </div>
        <div class="layui-form-item">
            <input class="layui-input" name="password" placeholder="密码" lay-verify="required" type="password" autocomplete="off">
        </div>
        
        <button class="layui-btn login_btn" lay-submit="" lay-filter="login">登录</button>
    </form>
</div>
<script type="text/javascript" src="/static/admin/layui/layui.js"></script>
<script type="text/javascript">
  layui.config({
    base : "/static/admin/js/"
  }).use(['form','layer'],function(){
    var form = layui.form(),
      layer = parent.layer === undefined ? layui.layer : parent.layer,
      $ = layui.jquery;
    //video背景
    $(window).resize(function(){
      if($(".video-player").width() > $(window).width()){
        $(".video-player").css({"height":$(window).height(),"width":"auto","left":-($(".video-player").width()-$(window).width())/2});
      }else{
        $(".video-player").css({"width":$(window).width(),"height":"auto","left":-($(".video-player").width()-$(window).width())/2});
      }
    }).resize();

    //登录按钮事件
    form.on("submit(login)",function(data){

      var index = top.layer.msg('数据提交中，请稍候',{icon: 16,time:false,shade:0.8});

      console.log(data)
      _data = data.field
      console.log(_data)

      $.ajax({
        url: data.form.action,
        type: data.form.method,
        data: _data,
        success: function (res) {
          top.layer.close(index);
         if(res.code == 2000) {
           window.location.href=res.url
         }
        },
        error: function (err) {
          console.log(err)
        }
      })
      return false;
    })
  })
</script>
</body>
</html>
