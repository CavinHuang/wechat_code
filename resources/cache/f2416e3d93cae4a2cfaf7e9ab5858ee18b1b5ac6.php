<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>用户总数--layui后台管理模板</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/admin/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="//at.alicdn.com/t/font_tnyc012u2rlwstt9.css" media="all" />
    <link rel="stylesheet" href="/static/admin/css/user.css" media="all" />
</head>
<body class="childrenBody">
<blockquote class="layui-elem-quote news_search">
    <div class="layui-inline">
        <div class="layui-input-inline">
            <input type="text" value="" placeholder="请输入关键字" class="layui-input search_input">
        </div>
        <a class="layui-btn search_btn">查询</a>
    </div>
    <div class="layui-inline">
        <a class="layui-btn layui-btn-normal usersAdd_btn">添加用户</a>
    </div>
    <div class="layui-inline">
        <a class="layui-btn layui-btn-danger batchDel">批量删除</a>
    </div>
    <div class="layui-inline">
        <div class="layui-form-mid layui-word-aux">　本页面刷新后除新添加的文章外所有操作无效，关闭页面所有数据重置</div>
    </div>
</blockquote>
<div class="layui-form users_list">
    <table class="layui-table">
        <colgroup>
            <col width="50">
            <col>
            <col width="18%">
            <col width="8%">
            <col width="12%">
            <col width="12%">
            <col width="18%">
            <col width="15%">
        </colgroup>
        <thead>
        <tr>
            
            <th width="180">登录名</th>
            <th>头像</th>
            <th>会员状态</th>
            <th>最后登录时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody class="users_content">
        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                
                <td><?php echo e($v->username); ?></td>
                <td align="center"><img src="<?php echo e($v->user_img); ?>" alt="" style="width:50px;height:50px;margin: 6px;"></td>
                <td><?php if($v->status == 1): ?>正常<?php else: ?> 锁定 <?php endif; ?></td>
                <td><?php echo e($v->createtime); ?></td>
                <td>
                   <a class="layui-btn layui-btn-mini users_edit" data-id="<?php echo e($v->id); ?>"><i class="iconfont icon-edit"></i> 编辑</a>
                    <a class="layui-btn layui-btn-danger layui-btn-mini users_del" data-id="'+data[i].usersId+'"><i class="layui-icon">&#xe640;</i> 删除</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<div id="page"></div>
<script type="text/javascript" src="/static/admin/layui/layui.js"></script>
<script type="text/javascript">
    layui.config({
        base : "/static/admin/js/"
    }).use(['form','layer','jquery','laypage'],function(){
        var form = layui.form(),
            layer = parent.layer === undefined ? layui.layer : parent.layer,
            laypage = layui.laypage,
            $ = layui.jquery;

        //加载页面数据
        var usersData = '';
        $.get("../../json/usersList.json", function(data){
            usersData = data;
            if(window.sessionStorage.getItem("addUser")){
                var addUser = window.sessionStorage.getItem("addUser");
                usersData = JSON.parse(addUser).concat(usersData);
            }
            //执行加载数据的方法
            usersList();
        })

        //查询
        $(".search_btn").click(function(){
            var userArray = [];
            if($(".search_input").val() != ''){
                var index = layer.msg('查询中，请稍候',{icon: 16,time:false,shade:0.8});
                setTimeout(function(){
                    $.ajax({
                        url : "../../json/usersList.json",
                        type : "get",
                        dataType : "json",
                        success : function(data){
                            if(window.sessionStorage.getItem("addUser")){
                                var addUser = window.sessionStorage.getItem("addUser");
                                usersData = JSON.parse(addUser).concat(data);
                            }else{
                                usersData = data;
                            }
                            for(var i=0;i<usersData.length;i++){
                                var usersStr = usersData[i];
                                var selectStr = $(".search_input").val();
                                function changeStr(data){
                                    var dataStr = '';
                                    var showNum = data.split(eval("/"+selectStr+"/ig")).length - 1;
                                    if(showNum > 1){
                                        for (var j=0;j<showNum;j++) {
                                            dataStr += data.split(eval("/"+selectStr+"/ig"))[j] + "<i style='color:#03c339;font-weight:bold;'>" + selectStr + "</i>";
                                        }
                                        dataStr += data.split(eval("/"+selectStr+"/ig"))[showNum];
                                        return dataStr;
                                    }else{
                                        dataStr = data.split(eval("/"+selectStr+"/ig"))[0] + "<i style='color:#03c339;font-weight:bold;'>" + selectStr + "</i>" + data.split(eval("/"+selectStr+"/ig"))[1];
                                        return dataStr;
                                    }
                                }
                                //用户名
                                if(usersStr.userName.indexOf(selectStr) > -1){
                                    usersStr["userName"] = changeStr(usersStr.userName);
                                }
                                //用户邮箱
                                if(usersStr.userEmail.indexOf(selectStr) > -1){
                                    usersStr["userEmail"] = changeStr(usersStr.userEmail);
                                }
                                //性别
                                if(usersStr.userSex.indexOf(selectStr) > -1){
                                    usersStr["userSex"] = changeStr(usersStr.userSex);
                                }
                                //会员等级
                                if(usersStr.userGrade.indexOf(selectStr) > -1){
                                    usersStr["userGrade"] = changeStr(usersStr.userGrade);
                                }
                                if(usersStr.userName.indexOf(selectStr)>-1 || usersStr.userEmail.indexOf(selectStr)>-1 || usersStr.userSex.indexOf(selectStr)>-1 || usersStr.userGrade.indexOf(selectStr)>-1){
                                    userArray.push(usersStr);
                                }
                            }
                            usersData = userArray;
                            usersList(usersData);
                        }
                    })

                    layer.close(index);
                },2000);
            }else{
                layer.msg("请输入需要查询的内容");
            }
        })

        //添加会员
        $(".usersAdd_btn").click(function(){
            var index = layui.layer.open({
                title : "添加会员",
                type : 2,
                content : "/admin/user/add.html",
                success : function(layero, index){
                    setTimeout(function(){
                        layui.layer.tips('点击此处返回会员列表', '.layui-layer-setwin .layui-layer-close', {
                            tips: 3
                        });
                    },500)
                }
            })
            //改变窗口大小时，重置弹窗的高度，防止超出可视区域（如F12调出debug的操作）
            $(window).resize(function(){
                layui.layer.full(index);
            })
            layui.layer.full(index);
        })

        //批量删除
        $(".batchDel").click(function(){
            var $checkbox = $('.users_list tbody input[type="checkbox"][name="checked"]');
            var $checked = $('.users_list tbody input[type="checkbox"][name="checked"]:checked');
            if($checkbox.is(":checked")){
                layer.confirm('确定删除选中的信息？',{icon:3, title:'提示信息'},function(index){
                    var index = layer.msg('删除中，请稍候',{icon: 16,time:false,shade:0.8});
                    setTimeout(function(){
                        //删除数据
                        for(var j=0;j<$checked.length;j++){
                            for(var i=0;i<usersData.length;i++){
                                if(usersData[i].newsId == $checked.eq(j).parents("tr").find(".news_del").attr("data-id")){
                                    usersData.splice(i,1);
                                    usersList(usersData);
                                }
                            }
                        }
                        $('.users_list thead input[type="checkbox"]').prop("checked",false);
                        form.render();
                        layer.close(index);
                        layer.msg("删除成功");
                    },2000);
                })
            }else{
                layer.msg("请选择需要删除的文章");
            }
        })

        //全选
        form.on('checkbox(allChoose)', function(data){
            var child = $(data.elem).parents('table').find('tbody input[type="checkbox"]:not([name="show"])');
            child.each(function(index, item){
                item.checked = data.elem.checked;
            });
            form.render('checkbox');
        });

        //通过判断文章是否全部选中来确定全选按钮是否选中
        form.on("checkbox(choose)",function(data){
            var child = $(data.elem).parents('table').find('tbody input[type="checkbox"]:not([name="show"])');
            var childChecked = $(data.elem).parents('table').find('tbody input[type="checkbox"]:not([name="show"]):checked')
            if(childChecked.length == child.length){
                $(data.elem).parents('table').find('thead input#allChoose').get(0).checked = true;
            }else{
                $(data.elem).parents('table').find('thead input#allChoose').get(0).checked = false;
            }
            form.render('checkbox');
        })

        //操作
        $("body").on("click",".users_edit",function(){  //编辑
          var id = $(this).attr('data-id')
          var index = layui.layer.open({
            title : "添加会员",
            type : 2,
            content : "/admin/user/add?id="+id,
            success : function(layero, index){
              setTimeout(function(){
                layui.layer.tips('点击此处返回会员列表', '.layui-layer-setwin .layui-layer-close', {
                  tips: 3
                });
              },500)
            }
          })
          //改变窗口大小时，重置弹窗的高度，防止超出可视区域（如F12调出debug的操作）
          $(window).resize(function(){
            layui.layer.full(index);
          })
          layui.layer.full(index);
        })

        $("body").on("click",".users_del",function(){  //删除
            var _this = $(this);
            layer.confirm('确定删除此用户？',{icon:3, title:'提示信息'},function(index){
                //_this.parents("tr").remove();
                for(var i=0;i<usersData.length;i++){
                    if(usersData[i].usersId == _this.attr("data-id")){
                        usersData.splice(i,1);
                        usersList(usersData);
                    }
                }
                layer.close(index);
            });
        })

        function usersList(){
            //渲染数据
            function renderDate(data,curr){
                var dataHtml = '';
                currData = usersData.concat().splice(curr*nums-nums, nums);
                if(currData.length != 0){
                    for(var i=0;i<currData.length;i++){
                        dataHtml += '<tr>'
                            +  '<td><input type="checkbox" name="checked" lay-skin="primary" lay-filter="choose"></td>'
                            +  '<td>'+currData[i].userName+'</td>'
                            +  '<td>'+currData[i].userEmail+'</td>'
                            +  '<td>'+currData[i].userSex+'</td>'
                            +  '<td>'+currData[i].userGrade+'</td>'
                            +  '<td>'+currData[i].userStatus+'</td>'
                            +  '<td>'+currData[i].userEndTime+'</td>'
                            +  '<td>'
                            +    '<a class="layui-btn layui-btn-mini users_edit"><i class="iconfont icon-edit"></i> 编辑</a>'
                            +    '<a class="layui-btn layui-btn-danger layui-btn-mini users_del" data-id="'+data[i].usersId+'"><i class="layui-icon">&#xe640;</i> 删除</a>'
                            +  '</td>'
                            +'</tr>';
                    }
                }else{
                    dataHtml = '<tr><td colspan="8">暂无数据</td></tr>';
                }
                return dataHtml;
            }

            //分页
            var nums = 13; //每页出现的数据量
            laypage({
                cont : "page",
                pages : Math.ceil(usersData.length/nums),
                jump : function(obj){
                    $(".users_content").html(renderDate(usersData,obj.curr));
                    $('.users_list thead input[type="checkbox"]').prop("checked",false);
                    form.render();
                }
            })
        }

    })
</script>
</body>
</html>
