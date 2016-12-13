<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>公司招聘</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta content="width=1200" name="viewport">
    <link rel="shortcut icon" href="/images/youyue.ico">
    <link href="/css/job/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mian.js"></script>
    <link href="/css/job/style.css" rel="stylesheet">
    <style>
        .footer-pull{
            background: #1e1b29;
            width: 100%;
            color: #999;
            padding: 45px 0 65px;
            font-size: 12px;
            display: inline-block;
            position: relative;
            z-index: 1000;
        }
        .footer{
            width: 1000px;
            margin: 0 auto;
        }
        .footer p{
            float: left;
            padding-right: 50px;
            line-height: 1.9;
            color:#999;
        }
        .footer p span{
            display: inline-block;
            padding-bottom: 8px;
            font-size: 14px;
            color: rgba(255,255,255,.8)
        }
        .footer .none{
            padding-right: 0;
            padding-top: 30px;
        }
        .footer p a{
            color: #999;
            text-decoration: none;
        }
        .footer p a:hover{
            color: #fff;
            text-decoration: underline;
        }
    </style>
</head>

<body>
<nav class="nav-header-bot">
    <div class="nav-width-bot">
        <div class="logo"><a href="<?=Url::toRoute('/')?>"><img src="/images/logo.png" /></a></div>
        <div class="nav-link">
            <ul>
                <li><a href="<?=Url::toRoute('/index/index')?>">首页</a></li>
                <li><a href="<?=Url::toRoute('/company/index')?>">公司介绍</a></li>
                <!--                <li><a href="--><?//=Url::toRoute('/information/index')?><!--">最新资讯</a></li>-->
                <li class="active"><a href="<?=Url::toRoute('/job/index')?>" style="color:#63ac48;">公司招聘</a></li>
                <li><a href="<?=Url::toRoute('/cooperation/index')?>">合作共赢</a></li>
                <li><a href="<?=Url::toRoute('/download/index')?>">悦动力商城</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="Bitmap-a"></div>
<div class="mian-all">
    <div class="mian-left">
        <div class="mian-nav">
            <ul>
                <li class="active"><a href="<?=Url::toRoute('/job/index')?>">招聘岗位</a></li>
                <li><a href="<?=Url::toRoute('/job/flow')?>">招聘流程</a></li>
                <li><a href="<?=Url::toRoute('/job/issue')?>">常见问题</a></li>
            </ul>
        </div>
    </div>
    <div class="mian-right">
        <div class="post-list">
            <div class="thead"><span class="a">职位名称</span><span class="b">职位类别</span><span class="c">工作地点</span><span class="d">招聘人数</span><span class="e">更新时间</span></div>
            <ul>
                <li><span class="lat-1"><a href="http://www.hotjob.cn/wt/yunshan/web/index/webPositionN300!getOnePosition?postId=134305&recruitType=1&brandCode=1&importPost=0" target="_blank">客户端开发工程师</a></span><span class="lat-2">技术</span><span class="lat-3">北京</span><span class="lat-4">5</span><span class="lat-5">2016-08-31
</span></li>
                <li><span class="lat-1"><a href="http://www.hotjob.cn/wt/yunshan/web/index/webPositionN300!getOnePosition?postId=134304&recruitType=1&brandCode=1&importPost=0" target="_blank">测试工程师</a></span><span class="lat-2">技术</span><span class="lat-3">北京</span><span class="lat-4">2</span><span class="lat-5">2016-08-31</span></li>
                <li><span class="lat-1"><a href="http://www.hotjob.cn/wt/yunshan/web/index/webPositionN300!getOnePosition?postId=134303&recruitType=1&brandCode=1&importPost=0" target="_blank">数据开发工程师</a></span><span class="lat-2">技术</span><span class="lat-3">北京</span><span class="lat-4">2</span><span class="lat-5">2016-08-31</span></li>
                <li><span class="lat-1"><a href="http://www.hotjob.cn/wt/yunshan/web/index/webPositionN300!getOnePosition?postId=134302&recruitType=1&brandCode=1&importPost=0" target="_blank">前端开发工程师</a></span><span class="lat-2">技术</span><span class="lat-3">北京</span><span class="lat-4">5</span><span class="lat-5">2016-08-31</span></li>
                <li><span class="lat-1"><a href="http://www.hotjob.cn/wt/yunshan/web/index/webPositionN300!getOnePosition?postId=134301&recruitType=1&brandCode=1&importPost=0" target="_blank">后端开发工程师</a></span><span class="lat-2">技术</span><span class="lat-3">北京</span><span class="lat-4">10</span><span class="lat-5">2016-08-31</span></li>
                <li><span class="lat-1"><a href="http://www.hotjob.cn/wt/yunshan/web/index/webPositionN300!getOnePosition?postId=134902&recruitType=1&brandCode=1&importPost=0" target="_blank">商城运营专员</a></span><span class="lat-2">技术</span><span class="lat-3">北京</span><span class="lat-4">5</span><span class="lat-5">2016-08-31</span></li>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="footer-pull">
    <div class="footer">
        <p><span>关于</span><br/><a href="<?=Url::toRoute('/company/index')?>">优悦佳品</a><br/><a  href="javascript:;">公司资讯</a></p>
        <p><span>联系</span><br/><a href="<?=Url::toRoute('/job/index')?>">加入我们</a><br/><a href="<?=Url::toRoute('/cooperation/index')?>">合作共赢</a></p>
        <p><span>帮助</span><br/><a href="javascript:;">新手指南</a><br/><a href="javascript:;">常见问题</a></p>
        <p><span>版权信息</span><br/>copyright © 2014-2016 北京云杉世界信息技术有限公司 4006-135-135<br/>北京市朝阳区安贞路安贞西里5区1号楼新华金融大厦3-4层 京ICP备14045665号</p>
        <p class="none"><a href="https://credit.cecdc.com/CX20151012011563030185.html" target="_blank"><img src="/images/cert.png"></a></p>
    </div>
</div>
</body>
</html>