<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
    <title>{{$site->title}}</title>
    <meta name="keywords" content="{{$site->keywords}}">
    <meta name="description" content="{{$site->description}}">
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?357a88dd3e0960e30361a6679734da32";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .content{
            width:360px; height:auto; margin:0 auto; font-size:12px; text-align:center;
            font-size: 16px;
            line-height: 1.5em;
            overflow: hidden;
            background: #fff;
            padding: 8px 12px;
        }
        .content img {
            width: 100%;
        }
    </style>
</head>

<body style=" margin:0; padding:0; background-color:#CCCCCC ">


<div class="content" style=" ">
    {!! $site->index_content !!}
    <div class="footer">
        {{$site->footer_note}}{{$site->tj}}
    </div>
</div>

</body>
</html>
