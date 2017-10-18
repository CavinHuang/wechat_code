<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>首页--layui后台管理模板</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/admin/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="//at.alicdn.com/t/font_tnyc012u2rlwstt9.css" media="all" />
    <link rel="stylesheet" href="/static/admin/css/main.css" media="all" />
</head>
<body class="childrenBody">

<div class="row">
    <div class="sysNotice" style="width: auto; margin: 12px 20px; float: none">
        <blockquote class="layui-elem-quote title">系统基本参数</blockquote>
        <table class="layui-table">
            <colgroup>
                <col>
                <col>
            </colgroup>
            <tbody>
            <tr>
                <td width="110px">程序版本</td>
                <td>管理系统 v1.0.0</td>
            </tr>
            <tr>
                <td>服务器类型</td>
                <td><?php echo e(php_uname('s')); ?></td>
            </tr>
            <tr>
                <td>PHP版本</td>
                <td><?php echo e(PHP_VERSION); ?></td>
            </tr>
            <tr>
                <td>Zend版本</td>
                <td><?php echo e(Zend_Version()); ?></td>
            </tr>
            <tr>
                <td>服务器解译引擎</td>
                <td><?php echo e($_SERVER['SERVER_SOFTWARE']); ?></td>
            </tr>
            <tr>
                <td>服务器语言</td>
                <td><?php echo e($_SERVER['HTTP_ACCEPT_LANGUAGE']); ?></td>
            </tr>
            <tr>
                <td>服务器Web端口</td>
                <td><?php echo e($_SERVER['SERVER_PORT']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript" src="/static/admin/layui/layui.js"></script>
<script type="text/javascript" src="/static/admin/js/main.js"></script>
</body>
</html>
