<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>文章添加--layui后台管理模板</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/admin/layui/css/layui.css" media="all" />
</head>
<body class="childrenBody">
<form class="layui-form" style="width:80%;" action="/admin/site/dopost" method="post">
    <div class="layui-form-item">
        <label class="layui-form-label">网站标题</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input siteTitle" name="title" lay-verify="required" value="<?php echo e(isset($site->title) ? $site->title : ''); ?>" placeholder="请输入网站名称">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">网站关键词</label>
        <div class="layui-input-block">
            <input type="tel" class="layui-input siteKeywords" name="keywords" lay-verify="" value="<?php echo e(isset($site->keywords) ? $site->keywords : ''); ?>" placeholder="网站关键词">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">网站描述</label>
        <div class="layui-input-block">
            <textarea placeholder="请输入网站描述" class="layui-textarea siteDesc" name="description"><?php echo e(isset($site->description) ? $site->description : ''); ?></textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">站长邮箱</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input siteEmail" name="email" lay-verify="email" value="<?php echo e(isset($site->email) ? $site->email : ''); ?>" placeholder="请输入网站地址">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">统计代码</label>
        <div class="layui-input-block">
            <textarea placeholder="请输入统计代码" class="layui-textarea siteTj" name="tj"><?php echo e($site->tj); ?></textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">网站底部说明</label>
        <div class="layui-input-block">
            <textarea placeholder="请输入网站底部说明" class="layui-textarea siteFooter" name="footer_note"><?php echo e(isset($site->footer_note) ? $site->footer_note : ''); ?></textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">网站首页内容</label>
        <div class="layui-input-block">
            <textarea placeholder="请输入站点描述" class="layui-textarea siteIndex" name="index_content" id="links_content"><?php echo e(isset($site->index_content) ? $site->index_content : ''); ?></textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit="" lay-filter="addLinks">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>
<script type="text/javascript" src="/static/admin/layui/layui.js"></script>
<script type="text/javascript">
    layui.config({
        base : "/static/admin/js/"
    }).use(['form','layer','jquery','layedit','laydate'],function(){
        var form = layui.form(),
            layer = parent.layer === undefined ? layui.layer : parent.layer,
            laypage = layui.laypage,
            layedit = layui.layedit,
            laydate = layui.laydate,
            $ = layui.jquery;

          //创建一个编辑器
          /*layedit.set({
          
          });*/
        var editIndex = layedit.build('links_content', {
          uploadImage: {
            url: 'upload' //接口url
            ,type: 'POST' //默认post
          }
        });
        var addLinksArray = [],addLinks;
        form.on("submit(addLinks)",function(data){
            
            //弹出loading
            var index = top.layer.msg('数据提交中，请稍候',{icon: 16,time:false,shade:0.8});
            console.log(data)
            _data = data.field
            console.log(_data)
            _data.index_content = layedit.getContent(editIndex)
            $.ajax({
              url: data.form.action,
              type: data.form.method,
              data: _data,
              success: function (res) {
                if(res.code == 2000) {
                  top.layer.close(index);
                  top.layer.msg(res.msg);
                  layer.closeAll("iframe");
                  //刷新父页面
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

</script>
</body>
</html>
