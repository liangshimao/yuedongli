<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
<head>
    <title>新疆优悦佳品有限公司</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,minimum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta name="keywords" content="悦动力,优悦佳品,饮料">
    <meta name="description" content="悦动力,优悦佳品,饮料">

    <link rel="shortcut icon" href="/images/youyue.ico">
    <link rel="stylesheet" type="text/css" href="/css/mobile/main.css">
    <script type="text/javascript" src="/js/mobile/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="/js/mobile/main.js"></script>
</head>

<body class="height-all">
<div class="home-warp">
    <div class="logo-nav">
        <div class="logo"><a href="<?=Url::toRoute('/index/index')?>"><img src="<?php if(empty($logo)):echo '/images/logo.png';else: echo $logo;endif;?>"></a></div>
        <div class="nav-icon"><img src="/images/nav-icon.png"></div>
    </div>
    <div class="menu-nav">
        <ul class="sum-ment">
            <li><a href="<?=Url::toRoute('/index/index-mobile')?>">首页</a></li>
            <li><a href="<?=Url::toRoute('/company/index-mobile')?>">公司介绍</a></li>
            <li><a href="<?=Url::toRoute('/job/index-mobile')?>">加入我们</a></li>
            <li><a href="<?=Url::toRoute('/cooperation/index-mobile')?>">合作共赢</a></li>
        </ul>
    </div>


    <div class="home-page-one">
        <div class="app-down">
            <div class="app-icon"><img src="<?php if(empty($logo)):echo '/images/logo.png';else: echo $logo;endif;?>"></div>
<!--            <div class="title"><img src="/images/home-text.png"></div>-->
        </div>
        <div class="down-arrow"><img src="/images/down-arrow.png"></div>
    </div>

    <div class="home-page-two">
        <div class="title"><span>选择大于努力</span> 成功只因有您</div>
        <div class="fu-title">悦动力 悦生活</div>
        <div class="picture"><img src="/images/399574937.jpg"></div>
        <ul>
            <li><span class="left a">激情</span><span class="right">我们有有创业发展的激情</span></li>
            <li><span class="left b">活力</span><span class="right">我们是一支年轻的队伍</span></li>
            <li><span class="left c">进取</span><span class="right">我们更爱实事求是 踏实进取</span></li>
        </ul>
    </div>

    <div class="home-page-three">
        <div class="title"><span>让我们的产品随处可见、触手可及</span></div>
        <div class="fu-title">满足和激发消费者的购买欲</div>
        <div class="picture"><img src="/images/359440847.jpg"></div>
        <ul>
            <li><span class="left a">合作</span><span class="right">长期合作 合作共赢</span></li>
            <li><span class="left b">让利</span><span class="right">源头直采 告别中间商</span></li>
            <li><span class="left c">双赢</span><span class="right">互联网＋线下＝双赢 改变中国饮料市场</span></li>
        </ul>
    </div>

    <div class="home-page-three">
        <div class="picture"><img src="/images/305914513.jpg"></div>
        <ul>
            <li><span class="left a">合作</span><span class="right">长期合作 合作共赢</span></li>
            <li><span class="left b">让利</span><span class="right">源头直采 告别中间商</span></li>
            <li><span class="left c">双赢</span><span class="right">互联网＋线下＝双赢 改变中国饮料市场</span></li>
        </ul>
    </div>

    <div class="home-page-three">
        <div class="picture"><img src="/images/page-four1.jpg"></div>
        <ul>
            <li><span class="left a">合作</span><span class="right">长期合作 合作共赢</span></li>
            <li><span class="left b">让利</span><span class="right">源头直采 告别中间商</span></li>
            <li><span class="left c">双赢</span><span class="right">互联网＋线下＝双赢 改变中国饮料市场</span></li>
        </ul>
    </div>

    
    <div class="home-page-four">
        <img src="/images/page-four2.jpg">
    </div>

    <div class="home-code-wit">
        <div class="home-code">
            <dl style="visibility:hidden;">
                <dt><img src="/images/code-pp.png"</dt>
                <dd>优悦品牌</dd>
            </dl>
            <dl>
                <dt><img src="/images/mc-gzh.jpg"</dt>
                <dd>优悦商城</dd>
            </dl>
            <dl style="visibility:hidden;">
                <dt><img src="/images/code-wx.png"</dt>
                <dd>微信商城</dd>
            </dl>
            <div class="clear"></div>
        </div>
    </div>

    <footer class="footer">
        <p>copyright © 2014-2016 新疆优悦佳品饮料有限公司<br/>
            <?php if(isset($info->phone)):echo $info->phone;else:echo '4008510958';endif;?> &nbsp;&nbsp;新ICP备17000073号 &nbsp;</p>
        <p class="xin"><a href="javascript:;"><img src="/images/xin.png"></a></p>
    </footer>
</div>
</body>
</html>