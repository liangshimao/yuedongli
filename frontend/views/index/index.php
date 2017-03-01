<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="en" class="hidden-html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/css/style.css" rel="stylesheet">
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?d90f1bc0b59424fc2fa6128b2acfd6d2";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <meta name="keywords" content="悦动力,优悦佳品,优越佳品,饮料,新疆优悦佳品" >
    <meta name="description" content="悦动力,优悦佳品,优越佳品,饮料">
    <link rel="shortcut icon" href="/images/youyue.ico">

    <meta name="keywords" content="悦动力,优悦佳品,优越佳品,饮料" >
    <meta name="description" content="悦动力,优悦佳品,优越佳品,饮料">
    <link rel="shortcut icon" href="/images/youyue.ico">
    <link rel="shortcut icon" href="/images/youyue.ico">
    <title>新疆优悦佳品饮料有限公司</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <style>
        .nav-width .nav-link a:hover {
            color: #63ac48;
            text-decoration: none;
        a {text-decoration: none;}
    </style>
</head>

<body>

<div class="fixed_r">
    <ul>
        <?php if(empty($list)):?>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <?php else:?>
                <li></li>
            <?php foreach ($list as $k=>$v):?>
                <li></li>
        <?php endforeach;endif;?>
    </ul>
</div>
<div class="num_box"  style="z-index: 0">
    <?php if(empty($list)):?>
    <div class="num" id="page-one">
        <div class="block-all1" id="page2font"></div>
        <div class="picture-bar">
            <div class="bar-content">
                <ul>
                    <li><img src="/images/picture02-bar1.png"></li>
                    <li><img src="/images/picture02-bar2.png"></li>
                    <li><img src="/images/picture02-bar3.png"></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="num" id="page-two">
        <div class="block-all2" id="page2font">
            <!--<h3>让餐厅采购<br/>省钱省心省时间</h3>
            <div class="info">源头严格优选 &nbsp;  产品火速送达<br/>餐厅采购更轻松</div>-->
        </div>
        <div class="picture-bar">
            <div class="bar-content">
                <ul>
                    <li><img src="/images/picture02-bar1.png"></li>
                    <li><img src="/images/picture02-bar2.png"></li>
                    <li><img src="/images/picture02-bar3.png"></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="num" id="page-three">
        <div class="block-all3" id="page3font"></div>
        <div class="picture-bar">
            <div class="bar-content">
                <ul>
                    <li><img src="/images/picture02-bar1.png"></li>
                    <li><img src="/images/picture02-bar2.png"></li>
                    <li><img src="/images/picture02-bar3.png"></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="num" id="page-four">
        <div class="block-all4" id="page4font"></div>
        <div class="picture-bar">
            <div class="bar-content">
                <ul>
                    <li><img src="/images/picture02-bar1.png"></li>
                    <li><img src="/images/picture02-bar2.png"></li>
                    <li><img src="/images/picture02-bar3.png"></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="num" id="page-four1">
        <div class="block-all4" id="page4font1"></div>
        <div class="picture-bar">
            <div class="bar-content">
                <ul>
                    <li><img src="/images/picture02-bar1.png"></li>
                    <li><img src="/images/picture02-bar2.png"></li>
                    <li><img src="/images/picture02-bar3.png"></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="num" id="page-four2">
        <div class="block-all4" id="page4font2"></div>
        <div class="picture-bar">
            <div class="bar-content">
                <ul>
                    <li><img src="/images/picture02-bar1.png"></li>
                    <li><img src="/images/picture02-bar2.png"></li>
                    <li><img src="/images/picture02-bar3.png"></li>
                </ul>
            </div>
        </div>
    </div>
    <?php else:foreach ($list as $key=>$value):?>
        <div class="num" style="background: url('<?=$value->img_url?>') no-repeat;background-size:cover;color:#fff;">
            <div class="block-all1"></div>
            <div class="picture-bar">
                <div class="bar-content">
                    <ul>
                        <li><img src="/images/picture02-bar1.png"></li>
                        <li><img src="/images/picture02-bar2.png"></li>
                        <li><img src="/images/picture02-bar3.png"></li>
                    </ul>
                </div>
            </div>
        </div>
    <?php endforeach;endif;?>
    <div class="num" id="page-five">
        <!--<div class="link-icon-al">
            <div class="link-block">
                <div class="table-cen"><p><span class="left"><a href="newbie.html#a-2" target="_blank"><img src="http://image.meicai.cn/meicaicn/wp-content/images/link-icon-1.png" width="125"><br/>注册与登录</a></span></p></div>
                <div class="table-cen"><p><span class="left pad-lt"><a href="newbie.html#a-3" target="_blank"><img src="http://image.meicai.cn/meicaicn/wp-content/images/link-icon-2.png" width="123"><br/>如何订货</a></span></p></div>
                <div class="table-cen"><p><span class="left pad-lr"><a href="newbie.html#a-5" target="_blank"><img src="http://image.meicai.cn/meicaicn/wp-content/images/link-icon-3.png" width="118"><br/>退换货政策</a></span></p></div>
                <div class="table-cen"><p><span class="right"><a href="newbie.html#a-7" target="_blank"><img src="http://image.meicai.cn/meicaicn/wp-content/images/link-icon-4.png" width="129"><br/>常见问题</a></span></p></div>
            </div>
        </div>-->
        <div class="qr-code-al">
<!--            <div class="qr-code">-->
<!--                <div class="table-cen">-->
<!--                    <div class="p">-->
<!--                        <img src="http://image.meicai.cn/meicaicn/wp-content/images/mc-code.png" style="padding:2px; background:#fff">-->
<!--                        <div class="code-text">悦动力品牌</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="table-cen">-->
<!--                    <div class="p p2">-->
<!--                        <img src="http://image.meicai.cn/meicaicn/wp-content/images/mc-wb.png">-->
<!--                        <div class="code-text">关注微博</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="table-cen">-->
<!--                    <div class="p p3">-->
<!--                        <img src="http://image.meicai.cn/meicaicn/wp-content/images/mc-app.png">-->
<!--                        <div class="code-text">商城app</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="table-cen none">-->
<!--                    <div class="p p4">-->
<!--                        <img src="http://image.meicai.cn/meicaicn/wp-content/images/mc-wx.png">-->
<!--                        <div class="code-text">微信商城</div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->
            <div class="footer-al">
                <div class="footer">
                    <p><span>关于</span><br/><a href="<?=Url::toRoute('/company/index')?>">优悦佳品</a><br/><a  href="javascript:;">公司资讯</a></p>
                    <p><span>联系</span><br/><a href="<?=Url::toRoute('/job/index')?>">加入我们</a><br/><a href="<?=Url::toRoute('/cooperation/index')?>">合作共赢</a></p>
                    <p><span>帮助</span><br/><a href="javascript:;">新手指南</a><br/><a href="javascript:;">常见问题</a></p>
                    <p><span>版权信息</span><br/>copyright © 2014-2016 新疆优悦佳品饮料有限公司 <?php if(isset($info->phone)):echo $info->phone;else:echo '4008510958';endif;?><br/>新ICP备17000073号</p>
                    <p class="none"><a href="javascript:;" target="_blank"><img src="/images/cert.png"></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" value="0" class="ddw"/>
<input type="hidden" value="0" class="ddw2"/>



<nav class="nav-header"  style="z-index: 99999999999999999">
    <div class="nav-width">
        
        <div class="logo"><a href="<?=Url::toRoute('/index/index')?>"><img src="<?php if(empty($logo)):echo '/images/logo.png';else:echo $logo;endif;?>" /></a></div>
        <div class="nav-link">
            <ul>
                <li><a href="<?=Url::toRoute('/index/index')?>" style="color:#63ac48;text-decoration: none;">首页</a></li>
                <li><a href="<?=Url::toRoute('/company/index')?>" style="text-decoration:none;">公司介绍</a></li>
<!--                <li><a href="--><?//=Url::toRoute('/information/index')?><!--" style="text-decoration:none;">最新资讯</a></li>-->
                <li><a href="<?=Url::toRoute('/job/index')?>" style="text-decoration:none;">公司招聘</a></li>
                <li><a href="<?=Url::toRoute('/cooperation/index')?>" style="text-decoration:none;">合作共赢</a></li>
                <li><a href="<?=Url::toRoute('/download/index')?>" style="text-decoration:none;">悦动力商城</a></li>
            </ul>
        </div>
    </div>
</nav>

<script src="/js/jquery-1.10.2.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/mian.js"></script>
<script src="/js/html5media.min.js"></script>
<script type="text/javascript" src="/js/scroll.js" ></script>
<script type="text/javascript" src="/js/jquery.mousewheel.js" ></script>
<script>
    var myVideo=document.getElementById("video1");
    function showvideo(){
        $(".videoshow").show();
        myVideo.play();
    }
    function closevideo(){
        $(".videoshow").hide();
        myVideo.pause();
    }
    window.onload = changeImmed;
    window.onresize = change;
    function change(){
        setInterval(function(){
            changeImmed();
        },500);
    }
    function changeImmed(){
        var bWidth = (document.body.clientWidth / 1920).toFixed(2);
        document.getElementById('page1font').style.zoom = bWidth;
        document.getElementById('page2font').style.zoom = bWidth;
        document.getElementById('page3font').style.zoom = bWidth;
        document.getElementById('page4font').style.zoom = bWidth;
    }






    function isIE(){
        if(!!window.ActiveXObject || "ActiveXObject" in window){
            return true;
        }else{
            return false;
        }
    }

    function IEVersion(){
        var rv = -1;
        if (navigator.appName == 'Microsoft Internet Explorer'){
            var ua = navigator.userAgent;
            var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
            if (re.exec(ua) != null)
                rv = parseFloat( RegExp.$1 );
        }else if (navigator.appName == 'Netscape'){
            var ua = navigator.userAgent;
            var re  = new RegExp("Trident/.*rv:([0-9]{1,}[\.0-9]{0,})");
            if (re.exec(ua) != null)
                rv = parseFloat( RegExp.$1 );
        }
        return rv;
    }

    if (isIE()) {
        if (IEVersion() <= 8) {
            var h = ($(window).height()+$(window).height()*0.15)+'px';
            $('#video').height(h);
            $('#video').width($(window).width()+'px');
            $('#video').css({'overflow':'hidden'});
        }else{
            $('#video').height('100%');
            $('#video').width('100%');
            $('#video').css({'overflow':'hidden'});

        };
    }else{
        $('#video').height('100%');
        $('#video').width('100%');
        $('#video').css({'overflow':'hidden'});

    };



</script>
</body>
</html>