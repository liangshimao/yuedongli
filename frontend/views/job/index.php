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
    <script src="/js/jquery-1.10.2.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/mian.js"></script>
    <link href="/css/job/style.css" rel="stylesheet">
    <link href="/css/join.css" rel="stylesheet">
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
            <div class="thead"><span class="a" style="width:160px;">职位名称</span></div>

            <div class="hjh-work-detail">
                <ul>
                    <li class="detail-li">
                        <div class="work-warp">
                            <span class="engineer fl">PHP工程师</span>
                            <span class="work-detail fr">职位详情<i></i></span>
                        </div>
                        <div class="work-con" >
                            <div class="work-txt">
                                <span>岗位职责</span>
                                <ul>
                                    <li>1、负责公司网站的系统开发；</li>
                                    <li>2、维护、升级及优化已有的程序（短信平台及图片服务器）；</li>
                                    <li>3、完成软件系统代码的实现，编写代码注释和开发文档；</li>
                                    <li>4、根据设计文档或需求说明完成代码编写，调试，测试和维护；</li>
                                    <li>5、分析并解决软件开发过程中的问题。</li>
                                </ul>
                            </div>
                            <div class="work-txt">
                                <span>任职要求</span>
                                <ul>
                                    <li>1、有PHP两年以上开发经验；</li>
                                    <li>2、熟悉网站开发、数据库维护、具有独立程序开发能力；</li>
                                    <li>3、精通PHP+MySql网站开发，掌握：Smart、Cache等常用PHP技术；</li>
                                    <li>4、有大型网站开发经验优先；</li>
                                    <li>5、能独立承担系统或者系统模块的设计和开发；</li>
                                </ul>
                            </div>
                            <div class="work-txt">
                                <ul>
                                    <li>工作地点：北京总部</li>
                                </ul>
                            </div>
                            <div class="work-txt contact-way1">
                                <span>联系方式</span>
                                <ul>
                                    <li>联系电话：01084982926</li>
                                    <li>邮箱：hjh_hr@bacic5i5j.com</li>
                                    <li>联系人：户女士</li>
                                </ul>
                            </div>

                        </div>
                    </li>
                    <li class="detail-li">
                        <div class="work-warp">
                            <span class="engineer fl">PHP工程师</span>
                            <span class="work-detail fr">职位详情<i></i></span>
                        </div>
                        <div class="work-con" >
                            <div class="work-txt">
                                <span>岗位职责</span>
                                <ul>
                                    <li>1、负责公司网站的系统开发；</li>
                                    <li>2、维护、升级及优化已有的程序（短信平台及图片服务器）；</li>
                                    <li>3、完成软件系统代码的实现，编写代码注释和开发文档；</li>
                                    <li>4、根据设计文档或需求说明完成代码编写，调试，测试和维护；</li>
                                    <li>5、分析并解决软件开发过程中的问题。</li>
                                </ul>
                            </div>
                            <div class="work-txt">
                                <span>任职要求</span>
                                <ul>
                                    <li>1、有PHP两年以上开发经验；</li>
                                    <li>2、熟悉网站开发、数据库维护、具有独立程序开发能力；</li>
                                    <li>3、精通PHP+MySql网站开发，掌握：Smart、Cache等常用PHP技术；</li>
                                    <li>4、有大型网站开发经验优先；</li>
                                    <li>5、能独立承担系统或者系统模块的设计和开发；</li>
                                </ul>
                            </div>
                            <div class="work-txt">
                                <ul>
                                    <li>工作地点：北京总部</li>
                                </ul>
                            </div>
                            <div class="work-txt contact-way1">
                                <span>联系方式</span>
                                <ul>
                                    <li>联系电话：01084982926</li>
                                    <li>邮箱：hjh_hr@bacic5i5j.com</li>
                                    <li>联系人：户女士</li>
                                </ul>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="footer-pull">
    <div class="footer">
        <p><span>关于</span><br/><a href="<?=Url::toRoute('/company/index')?>">优悦佳品</a><br/><a  href="javascript:;">公司资讯</a></p>
        <p><span>联系</span><br/><a href="<?=Url::toRoute('/job/index')?>">加入我们</a><br/><a href="<?=Url::toRoute('/cooperation/index')?>">合作共赢</a></p>
        <p><span>帮助</span><br/><a href="javascript:;">新手指南</a><br/><a href="javascript:;">常见问题</a></p>
        <p><span>版权信息</span><br/>copyright © 2014-2016 新疆优悦佳品饮料有限公司 010-61770976<br/>新疆喀什地区喀什经济开发区深喀大道北侧喀什发展大厦</p>
        <p class="none"><a href="https://credit.cecdc.com/CX20151012011563030185.html" target="_blank"><img src="/images/cert.png"></a></p>
    </div>
</div>
<script>
    $(function(){

        $(".detail-li .work-detail").each(function () {
            $(this).click(function () {
                $(".detail-li .work-detail").removeClass("current");
                $(".work-con").slideUp();
                if ($(this).parent().siblings().css("display") == "none") {
                    $(".detail-li .work-detail").removeClass("current");
                    $(this).addClass("current").parent().siblings().slideDown("slow");
                } else {
                    $(this).removeClass("current").parent().siblings().slideUp("slow");
                }
            })
        });
    });

</script>
</body>
</html>