<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="ITKEE社区,thinkphp5开源作品,thinkphp开发社区,模板资源分享,ShopNC开发,ShopNC技术交流,thinkphp技术交流,前端框架,企业站制作,前端开源框架,thinkphp技术交流群,thinkphp5交流,微信开发视频">
    <meta name="description" content="ITKEE.CN是以技术交流为中心开发的社区论坛，由几个志同道合的程序员一起维护组建的互联网技术工作室,曾为上百客户排忧解难，目前主要PHP技术交流，技术服务，前端开发，UI社区等业务为主线运营,社区及工作室主要定位于：互联网技术交流，互联网资源分享，网站开发，电商网站技术支持，整站开发，二次开发等服务">
    <?php echo $__env->yieldContent('css'); ?>
    
    <script src="/static/js/swiper.min.js"></script>
    
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
   
</head>
<body>
<div class="layui-header header header-doc">
    <div class="layui-main">
        <a class="logo" href="/" title="zukmb官网">zukmb官网</a>
        <ul class="layui-nav itkee-nav" pc>
            <li class="layui-nav-item" pc>
                <a href="/" target="_self"> <!--<i class="iconfont icon-shouye"></i>-->首页                </a>
            </li>
            <li class="layui-nav-item" pc>
                <a href="/" target="_self"> <!--<i class="iconfont icon-shouye"></i>-->服务                </a>
            </li>
            <li class="layui-nav-item" pc>
                <a href="/topic.html" target="_self"> <!--<i class="iconfont icon-wenda"></i>-->案例                <span class="badge badge-important" style="background: #9900FF">Hi</span>
                </a>
            </li>
            <li class="layui-nav-item" pc>
                <a href="/" target="_self"> <!--<i class="iconfont icon-shouye"></i>-->技术支持                </a>
            </li>
            <li class="layui-nav-item" pc>
                <a href="/" target="_self"> <!--<i class="iconfont icon-shouye"></i>-->关于我们                </a>
            </li>
            <li class="layui-nav-item" mobile>
                <a href="javascript:;">更多</a>
                <dl class="layui-nav-child">
                    <dd><a href="/" target="_self"> <!--<i class="iconfont icon-shouye"></i>-->首页</a></dd>
                    <dd><a href="/topic.html" target="_self"> <!--<i class="iconfont icon-wenda"></i>-->社区</a></dd>
                    <dd><a href="/download.html" target="_blank"> <!--<i class="iconfont icon-daima"></i>-->下载</a></dd>
                    <dd><a href="http://demo.itkee.cn" target="_blank"> <!--<i class="iconfont icon-shichang"></i>-->演示</a></dd>
                    <dd><a href="/doc.html" target="_blank"> <!--<i class="iconfont icon-daima"></i>-->文档</a></dd>
                    <dd><a href="/recommend.html" target="_blank"> <!--<i class="iconfont icon-lianjie"></i>-->推荐</a></dd>
                </dl>
            </li>
        </ul>
        
       
    </div>
</div>
<?php echo $__env->yieldContent('pageContent'); ?>

<div class="footer">
    <div class="qc-footer-service">
        <div class="footer-service">
            <div class="fs-list">
                <div class="fs-ct">
                    <a href="" class="item" target="_blank">
                        <span class="iconfont icon-lianjie" style="font-size:30px;color:#2277DA;"></span>
                        <span class="term">服务项目</span>
                    </a>
                </div>
                <div class="fs-ct">
                    <a href="http://www.itkee.cn/index/download/index.html" class="item" target="_blank">
                        <span class="iconfont icon-lianjie" style="font-size:30px;color:#2277DA;"></span>
                        <span class="term">本站资源</span>
                    </a>
                </div>
                <div class="fs-ct">
                    <a href="http://www.itkee.cn/index/topic/index/category/6.html" class="item" target="_blank">
                        <span class="iconfont icon-lianjie" style="font-size:30px;color:#2277DA;"></span>
                        <span class="term">官方公告</span>
                    </a>
                </div>
                <div class="fs-ct">
                    <a href="http://www.itkee.cn/index/topic/index/category/9.html" class="item" target="_blank">
                        <span class="iconfont icon-lianjie" style="font-size:30px;color:#2277DA;"></span>
                        <span class="term">技术闲聊</span>
                    </a>
                </div>
                <div class="fs-ct">
                    <a href="http://www.itkee.cn/index/topic/index/category/3.html" class="item" target="_blank">
                        <span class="iconfont icon-lianjie" style="font-size:30px;color:#2277DA;"></span>
                        <span class="term">技术交流</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="qc-footer-website">
        <div class="website-columns">
            <div class="columns ">
                <div class="cl-ct">
                    <h3><a class="ct-title">热门推荐</a></h3>
                    <ul class="ct-list">
                        <li>
                            <a href="http://www.itkee.cn/topic-info-131.html" target="_blank">thinkphp5视频教程</a>
                        </li>
                        <li>
                            <a href="http://www.itkee.cn/topic-info-105.html" target="_blank">社区日常更新提示</a>
                        </li>
                        <li>
                            <a href="http://www.itkee.cn/topic-info-137.html" target="_blank">ShopNC数据字典</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="columns ">
                <div class="cl-ct">
                    <h3><a class="ct-title">热门下载</a></h3>
                    <ul class="ct-list">
                        <li>
                            <a href="http://www.itkee.cn/topic-info-106.html" target="_blank">ShopNC后台静态文件</a>
                        </li>
                        <li>
                            <a href="http://www.itkee.cn/topic-info-116.html" target="_blank">电商整套模板</a>
                        </li>
                        <li>
                            <a href="http://www.itkee.cn/topic-info-51.html" target="_blank">开源轻量级博客</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="columns ">
                <div class="cl-ct">
                    <h3><a class="ct-title">合作伙伴</a></h3>
                    <ul class="ct-list">
                        <li>
                            <a href="tencent://AddContact/?fromId=45&fromSubId=1&subcmd=all&uin=282959407" target="_blank">联系站长</a>
                        </li>
                        <li>
                            <a href="http://www.itkee.cn/topic-info-170.html" target="_blank">焕购科技</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="columns ">
                <div class="cl-ct">
                    <h3><a class="ct-title">客户服务</a></h3>
                    <ul class="ct-list">
                        <li>
                            <a href="http://qm.qq.com/cgi-bin/qm/qr?k=umFd5-Vr1OOJ-3xJElELXdepKiR0GnUe" target="_blank">加入QQ群</a>
                        </li>
                        <li>
                            <a href="http://www.itkee.cn/index/visit/home/id/1.html" target="_blank">直达站长</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="columns ">
                <div class="cl-ct">
                    <h3><a class="ct-title">关注ITKEE</a></h3>
                    <ul class="ct-list">
                        <li>
                            <a href="http://wpa.qq.com/msgrd?v=3&uin=282959407&site=qq&menu=yes" target="_blank">联系站长</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="qc-footer-blogroll">
        <div class="blogroll-inner">
            <div class="link-set">
                <div class="department">
                    <a href="http://superman.itkee.cn" class="slide" target="_blank">SuperMan博客</a>
                    <a href="http://www.lampsx.com/" class="slide" target="_blank">尚线PHP培训</a>
                    <a href="http://www.yuanzaozi.com" class="slide" target="_blank">圆枣子</a>
                    <a href="http://www.swiper.com.cn/" class="slide" target="_blank">swiper中文网</a>
                    <a href="http://layer.layui.com/" class="slide" target="_blank">layer</a>
                    <a href="http://www.phpbiji.cn/" class="slide" target="_blank">PHP笔记</a>
                    <a href="http://www.bejsons.com" class="slide" target="_blank">bejsons在线工具</a>
                    <a href="http://www.cssnb.com" class="slide" target="_blank">工具界</a>
                    <a href="http://www.ebcms.com" class="slide" target="_blank">易贝CMS</a>
                    <a href="javascript:;" onclick="addLink()"  class="slide" >申请友链</a>
                </div>
                <div class="links">
                    <p class="line copyright">
                        <span class="slide"> Copyright © 2016-2017 ITKEE.CN. All Rights Reserved. ITKEE.CN 版权所有</span>
                        <a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank" class="slide slide-ct">豫ICP备15028392号</a>
                    </p>
                </div>
            </div>
            <div class="locale J-footerSwitchLang">
                <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1261269110'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1261269110%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>            </div>
        </div>
    </div>
</div>
<span style="display: none;" id="jion">
    <div style="padding:20px;">
        <p>友链申请</p>
        <p>限互联网行业</p>
        <p>限IT技术交流等</p>
        <br/>
        <p style="text-align: right">联系邮箱：superman@itkee.cn</p>
    </div>
</span>
<div class="site-console" style="display: none;">
    欢迎进入ITKEE社区
    一张网页，要经历怎样的过程，才能抵达用户面前？
    一位新人，要经历怎样的成长，才能站在技术之巅？
    加入ITKEE社区交流，分享交流更多互联网技术知识！
    进入社区：http://www.itkee.cn/topic.html
</div>
<script>
  function addLink(){
    layer.open({
      title: "申请友链",
      type: 1,
      skin: 'layui-layer-rim', //加上边框
      area: ['420px', '220px'], //宽高
      content: $("#jion").html()
    })
  }
</script>
<script src="/static/js/layui.all.js"></script>
<script src="/static/js/function.js"></script>
<script src="/static/js/common.js"></script>

<script src="/static/js/swiper.animate1.0.2.min.js"></script>
<script src="/static/js/swiper-itkee.js"></script>


<script>
  //    var loading = layer.msg('正在加载', {icon:16, shade: 0.1, time:0}); //0代表加载的风格，支持0-2
  //    window.onload = function(){layer.close(loading);};
  //    <!-- 定义全局JS变量-->
  var GV = {
    current_controller: "index/index/",
    base_url: "/static",
    uid:"0"
  };
  $(".dologin").click(function(){
    var url = $(this).attr('data-url');
    delCookie('itkee_refurl'); //清空cookie
    addCookie('itkee_refurl',window.location.href,'3600'); //设置cookie
    window.location.href = url;
  });

  layui.cache.page = 'jie';
  layui.cache.user = {
    uid: GV.uid
  };
  layui.config({
    version: "2.0.0"
    ,base: '/templete/HomeThemes/itkee/resources/mods/'
  }).extend({
    fly: 'index'
  }).use('fly', function(){
    var fly = layui.fly;
    //如果你是采用模版自带的编辑器，你需要开启以下语句来解析。
    $('.detail-body').each(function(){
      var othis = $(this), html = othis.html();
      othis.html(fly.content(html));
    });
    $('.home-dacontent').each(function(){
      var othis = $(this), html = othis.html();
      othis.html(fly.content(html));
    });
  });

</script>

<?php echo $__env->yieldContent('js'); ?>
</body>
</html>

