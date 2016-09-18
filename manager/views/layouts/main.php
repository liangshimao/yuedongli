<?php
use yii\helpers\Url;
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>助医微讲堂微信后台管理</title>
    <link rel="stylesheet" type="text/css" href="/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/css/main.css"/>
    <script type="text/javascript" src="/js/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员</a></li>
                <li><a href="#">修改密码</a></li>
                <li><a href="">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="<?=Url::toRoute('/index/list')?>"><i class="icon-font">&#xe008;</i>患者管理</a></li>
                        <li><a href=""><i class="icon-font">&#xe006;</i>咨询管理</a></li>
                        <li><a href=""><i class="icon-font">&#xe004;</i>讲座管理</a></li>
                        <li><a href=""><i class="icon-font">&#xe012;</i>作品管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href=""><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href=""><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href=""><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href=""><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">


        <?php $this->beginBody() ?>
        <?php echo $content; ?>
        <?php $this->endBody() ?>



    </div>
    <!--/main-->
</div>

</body>
</html>
