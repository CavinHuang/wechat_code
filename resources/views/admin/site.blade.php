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
<form class="layui-form" style="width:80%;">
    <div class="layui-form-item">
        <label class="layui-form-label">网站标题</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input linksName" lay-verify="required" placeholder="请输入网站名称">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">网站关键词</label>
        <div class="layui-input-block">
            <input type="tel" class="layui-input linksUrl" lay-verify="required|url" placeholder="请输入网站地址">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">网站描述</label>
        <div class="layui-input-block">
            <textarea placeholder="请输入网站描述" class="layui-textarea linksDesc"></textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">站长邮箱</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input masterEmail" lay-verify="email" placeholder="请输入网站地址">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">网站首页内容</label>
        <div class="layui-input-block">
            <textarea placeholder="请输入站点描述" class="layui-textarea linksDesc" id="links_content"></textarea>
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
        var editIndex = layedit.build('links_content', {
            uploadImage: {
                url: '/upload/',
                type: 'post'
            }
        });
        var addLinksArray = [],addLinks;
        form.on("submit(addLinks)",function(data){
            //是否添加过信息
            if(window.sessionStorage.getItem("addLinks")){
                addLinksArray = JSON.parse(window.sessionStorage.getItem("addLinks"));
            }
            //显示、审核状态
            var homePage = data.field.homePage=="on" ? "首页" : "",
                subPage = data.field.subPage=="on" ? "子页" : "";
            showAddress = '';
            if(subPage == '' && homePage == ''){
                showAddress = "暂不展示";
            }else if(homePage == ''){
                showAddress = subPage;
            }else if(subPage == ''){
                showAddress = homePage;
            }else{
                showAddress = homePage + '，' + subPage;
            }

            addLinks = '{"linksName":"'+ $(".linksName").val() +'",';  //网站名称
            addLinks += '"linksUrl":"'+ $(".linksUrl").val() +'",';	 //网站地址
            addLinks += '"linksDesc":"'+ $(".linksDesc").text() +'",'; //站点描述
            addLinks += '"linksTime":"'+ $(".linksTime").val() +'",'; //发布时间
            addLinks += '"masterEmail":"'+ $(".masterEmail").val() +'",'; //站长邮箱
            addLinks += '"showAddress":"'+ showAddress +'"}';  //展示位置
            addLinksArray.unshift(JSON.parse(addLinks));
            window.sessionStorage.setItem("addLinks",JSON.stringify(addLinksArray));
            //弹出loading
            var index = top.layer.msg('数据提交中，请稍候',{icon: 16,time:false,shade:0.8});
            setTimeout(function(){
                top.layer.close(index);
                top.layer.msg("文章添加成功！");
                layer.closeAll("iframe");
                //刷新父页面
                parent.location.reload();
            },2000);
            return false;
        })

    })

</script>
</body>
</html>