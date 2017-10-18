<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>会员添加--layui后台管理模板</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/admin/layui/css/layui.css" media="all" />
    <style type="text/css">
        .layui-form-item .layui-inline{ width:33.333%; float:left; margin-right:0; }
        @media(max-width:1240px){
            .layui-form-item .layui-inline{ width:100%; float:none; }
        }
    </style>
</head>
<body class="childrenBody">
<form class="layui-form" style="width:80%;" action="/admin/user/dopost" method="post">
    <div class="layui-form-item">
        <label class="layui-form-label">登录名</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input userName" name="username" value="<?php echo e(isset($user->username) ? $user->username : ''); ?>" lay-verify="required" placeholder="请输入登录名">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">密码</label>
        <div class="layui-input-block">
            <input type="password" class="layui-input userName" name="password" <?php if(!isset($user->password)): ?>lay-verify="required"<?php endif; ?>  placeholder="请输入密码">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">确认密码</label>
        <div class="layui-input-block">
            <input type="password" class="layui-input userName" name="confirm_password" <?php if(!isset($user->password)): ?>lay-verify="required" <?php endif; ?>  placeholder="请确认密码">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">会员状态</label>
        <div class="layui-input-block">
            <select name="status" class="status" name="status" lay-filter="userStatus">
                <option value="1" <?php if(isset($user->status) && $user->status == 1): ?>selected <?php endif; ?>>正常使用</option>
                <option value="0" <?php if(isset($user->status) && $user->status == 0): ?>selected <?php endif; ?>>限制用户</option>
            </select>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">头像</label>
        <div class="layui-input-block">
            <button type="button" class="layui-btn" id="test1">
                <i class="layui-icon"></i>上传图片
            </button>
            <img src="<?php echo e(isset($user->user_img) ? $user->user_img : ''); ?>" alt="" id="userImgShow" style="width:140px;height:140px"/>
            <input type="hidden" value="<?php echo e(isset($user->user_img) ? $user->user_img : ''); ?>" name="user_img" id="userImg"/>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <?php if(isset($user->id)): ?>
                <input type="hidden" value="<?php echo e($user->id); ?>" name="id" />
            <?php endif; ?>
            <button class="layui-btn" lay-submit="" lay-filter="addUser">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>
<script type="text/javascript" src="/static/admin/layui/layui.js"></script>
<script type="text/javascript">
    var $;
    layui.config({
        base : "/static/admin/js/"
    }).use(['form','layer','jquery', 'upload'],function(){
        var form = layui.form(),
            layer = parent.layer === undefined ? layui.layer : parent.layer,
            laypage = layui.laypage;
        var upload = layui.upload;
        $ = layui.jquery;
        console.log(upload)
      //执行实例
      var uploadInst = upload({
        elem: '#test1' //绑定元素
        ,url: '/admin/upload' //上传接口
        ,done: function(res){
          //上传完毕回调
          console.log(res)
          $("#userImg").val(res.data.src)
          $("#userImgShow").attr('src', res.data.src)
        }
        ,error: function(){
          //请求异常回调
        }
      });
        
        var addUserArray = [],addUser;
        form.on("submit(addUser)",function(data){
            //是否添加过信息
            if(data.field.password != data.field.confirm_password) {
              top.layer.msg('两次密码不一样');
              return false;
            }
            //弹出loading
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
              top.layer.msg(res.msg);
              if(res.code == 2000) {
               
                //刷新父页面
                layer.closeAll("iframe");
                parent.location.reload();
              }
              
            },
            error: function (err) {
              console.log(err)
            }
          })
            return false;
        })

    })

    //格式化时间
    function formatTime(_time){
        var year = _time.getFullYear();
        var month = _time.getMonth()+1<10 ? "0"+(_time.getMonth()+1) : _time.getMonth()+1;
        var day = _time.getDate()<10 ? "0"+_time.getDate() : _time.getDate();
        var hour = _time.getHours()<10 ? "0"+_time.getHours() : _time.getHours();
        var minute = _time.getMinutes()<10 ? "0"+_time.getMinutes() : _time.getMinutes();
        return year+"-"+month+"-"+day+" "+hour+":"+minute;
    }

</script>
</body>
</html>
