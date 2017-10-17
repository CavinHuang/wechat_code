<?php $__env->startSection('css'); ?>
    
    <link rel="stylesheet" href="/static/css/layui.css" />
    <link rel="stylesheet" href="/static/css/global.css" />
    <link rel="stylesheet" href="/static/css/common.css" />
    <script src="/static/js/jquery.js"></script>
    <link rel="stylesheet" href="/static/css/black.css" />
    <!--[if lt IE 9]>
    <script src="/static/js/html5shiv.min.js"></script>
    <script src="/static/js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/static/css/swiper.min.css">

    <link rel="stylesheet" href="/static/css/animate.min.css">
    <link rel="stylesheet" href="/static/css/style.css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageContent'); ?>
    
    <div class="swiper-container swiper-itkee">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url('/static/images/36421ef564935a63330ab39525a2a0c9.png')">
                <div class="jumbotron index-jumbotron">
                    <div class="ui container">
                        <h1 class="ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="1s" swiper-animate-delay="0.5s">
                            ITKEE管理系统【极速·清新·精简】                        </h1>
                        <p class="subtitle ani" swiper-animate-effect="bounceInUp" swiper-animate-duration="1s" swiper-animate-delay="0.9s">极速·清新·精简 是ITKEE系统追求的理念，节省开发成本</p>
                        <div class="actions">
                            <a href="javascript:;" onclick="window.open('http://www.itkee.cn/topic-info-251.html','_blank')" class="ui bordered orange big button ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="1s" swiper-animate-delay="1.3s">立即下载</a>
                            <a  href="javascript:;" onclick="window.open('https://github.com/itkee/itkee','_blank')"  class="ui bordered orange big button joinus ani" swiper-animate-effect="bounceInRight" swiper-animate-duration="1s" swiper-animate-delay="1.3s">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 如果需要导航按钮 -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <!-- Add Pagination -->
        <div class="swiper-pagination siper-itkee-page"></div>
        <!-- Initialize Swiper -->
    </div>
    <div class="layui-main itkee-main">
        <ul class="site-idea">
            <li>
                <fieldset class="layui-elem-field layui-field-title">
                    <legend>站点介绍</legend>
                    <p><p>
                        <span style="font-family:" font-size:14px;white-space:normal;background-color:#eeeeee;"="">身处在前端社区的繁荣之下，我们都在有意或无意地追逐,</span>全新thinkphp轻量级打造：极速，清新，简洁，高效...返璞归真
                    </p>
                    <p>
                        <br />
                    </p>
                    <p style="text-align:right;">
                        <a href="http://www.itkee.cn/topic-info-131.html" target="_blank">点击查看</a>
                    </p>
                    <p>
                        <br />
                    </p></p>
                </fieldset>
            </li>
            <li>
                <fieldset class="layui-elem-field layui-field-title">
                    <legend>资源下载</legend>
                    <p><p>
                        本站汇集了原创资源，互联网资源等，如果在本站您获得了一定的收益，请不要吝啬您的言语，可以在社区写一篇鼓励我们的话，我们会更努力！
                    </p>
                    <p style="text-align:right;">
                        <a href="http://www.itkee.cn/download.html" target="_blank">资源下载</a>
                    </p></p>
                </fieldset>
            </li>
            <li>
                <fieldset class="layui-elem-field layui-field-title">
                    <legend>社区交流</legend>
                    <p><p>
                        [ITKEE社区] PHP/前端/交流，互联网技术交流，资源分享，我们一直在努力，欢迎加入！
                    </p>
                    <p>
                        <br />
                    </p>
                    <p>
                        <br />
                    </p>
                    <p style="text-align:right;">
                        <a href="https://jq.qq.com/?_wv=1027&k=4AEFdBX" target="_blank">点击加入</a>
                    </p></p>
                </fieldset>
            </li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts.home_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>