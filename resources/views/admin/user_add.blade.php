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
<form class="layui-form" style="width:80%;">
    <div class="layui-form-item">
        <label class="layui-form-label">登录名</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input userName" lay-verify="required" placeholder="请输入登录名">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">邮箱</label>
        <div class="layui-input-block">
            <input type="text" class="layui-input userEmail" lay-verify="email" placeholder="请输入邮箱">
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-inline">
            <label class="layui-form-label">性别</label>
            <div class="layui-input-block userSex">
                <input type="radio" name="sex" value="男" title="男" checked>
                <input type="radio" name="sex" value="女" title="女">
                <input type="radio" name="sex" value="保密" title="保密">
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">会员等级</label>
            <div class="layui-input-block">
                <select name="userGrade" class="userGrade" lay-filter="userGrade">
                    <option value="0">注册会员</option>
                    <option value="1">中级会员</option>
                    <option value="2">高级会员</option>
                    <option value="3">超级会员</option>
                </select>
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">会员状态</label>
            <div class="layui-input-block">
                <select name="userStatus" class="userStatus" lay-filter="userStatus">
                    <option value="0">正常使用</option>
                    <option value="1">限制用户</option>
                </select>
            </div>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">站点描述</label>
        <div class="layui-input-block">
            <textarea placeholder="请输入站点描述" class="layui-textarea linksDesc"></textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
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
    }).use(['form','layer','jquery'],function(){
        var form = layui.form(),
            layer = parent.layer === undefined ? layui.layer : parent.layer,
            laypage = layui.laypage;
        $ = layui.jquery;

        var addUserArray = [],addUser;
        form.on("submit(addUser)",function(data){
            //是否添加过信息
            if(window.sessionStorage.getItem("addUser")){
                addUserArray = JSON.parse(window.sessionStorage.getItem("addUser"));
            }

            var userStatus,userGrade,userEndTime;
            //会员等级
            if(data.field.userGrade == '0'){
                userGrade = "注册会员";
            }else if(data.field.userGrade == '1'){
                userGrade = "中级会员";
            }else if(data.field.userGrade == '2'){
                userGrade = "高级会员";
            }else if(data.field.userGrade == '3'){
                userGrade = "超级会员";
            }
            //会员状态
            if(data.field.userStatus == '0'){
                userStatus = "正常使用";
            }else if(data.field.userStatus == '1'){
                userStatus = "限制用户";
            }

            addUser = '{"usersId":"'+ new Date().getTime() +'",';//id
            addUser += '"userName":"'+ $(".userName").val() +'",';  //登录名
            addUser += '"userEmail":"'+ $(".userEmail").val() +'",';	 //邮箱
            addUser += '"userSex":"'+ data.field.sex +'",'; //性别
            addUser += '"userStatus":"'+ userStatus +'",'; //会员等级
            addUser += '"userGrade":"'+ userGrade +'",'; //会员状态
            addUser += '"userEndTime":"'+ formatTime(new Date()) +'"}';  //登录时间
            console.log(addUser);
            addUserArray.unshift(JSON.parse(addUser));
            window.sessionStorage.setItem("addUser",JSON.stringify(addUserArray));
            //弹出loading
            var index = top.layer.msg('数据提交中，请稍候',{icon: 16,time:false,shade:0.8});
            setTimeout(function(){
                top.layer.close(index);
                top.layer.msg("用户添加成功！");
                layer.closeAll("iframe");
                //刷新父页面
                parent.location.reload();
            },2000);
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