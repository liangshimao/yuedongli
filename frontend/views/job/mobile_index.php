<?php
use yii\helpers\Url;

?>
<!DOCTYPE html>
<html>
<head>
    <title>悦动力-新疆优悦佳品有限公司</title>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1,minimum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta name="keywords" content="悦动力,优悦佳品,饮料">
    <meta name="description" content="悦动力,优悦佳品,饮料">

    <link rel="shortcut icon" href="/images/youyue.ico">
    <link rel="stylesheet" type="text/css" href="/css/mobile/main.css">
    <script type="text/javascript" src="/js/mobile/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="/js/mobile/main.js"></script>
</head>

<body>
<div class="home-warp">
    <div class="logo-nav">
        <div class="logo"><a href="<?= Url::toRoute('/index/index') ?>"><img src="<?php if(empty($logo)):echo '/images/logo.png';else: echo $logo;endif;?>"></a></div>
        <div class="nav-icon"><img src="/images/nav-icon.png"></div>
    </div>
    <div class="menu-nav">
        <ul class="sum-ment">
            <li><a href="<?= Url::toRoute('/index/index-mobile') ?>">首页</a></li>
            <li><a href="<?= Url::toRoute('/company/index-mobile') ?>">公司介绍</a></li>
            <li><a href="<?= Url::toRoute('/job/index-mobile') ?>">加入我们</a></li>
            <li><a href="<?= Url::toRoute('/cooperation/index-mobile') ?>">合作共赢</a></li>
        </ul>
    </div>


    <div class="idea">
        <div class="title">公司招聘</div>
        <div class="promise">
            <p><span>加入我们  一切有你做主</span></p>
        </div>
        <div class="mission">
            <?php foreach ($job as $key=>$value):?>
            <div class="mc-block">
                <div class="name sm"><span><?=$value->name;?></span></div>
                <div class="info-text">
                    <?=$value->context;?>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
    

    <footer class="footer">
        <p>copyright © 2014-2016 新疆优悦佳品饮料有限公司<br/>
            <?php if(isset($info->phone)):echo $info->phone;else:echo '4008510958';endif;?> &nbsp;&nbsp;新ICP备17000073号 &nbsp;</p>
        <p class="xin"><a href="javascript:;"><img src="/images/xin.png"></a>
        </p>
    </footer>
</div>
</body>
</html>