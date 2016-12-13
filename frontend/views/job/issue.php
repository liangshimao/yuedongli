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
    <script src="/js/job/jquery-1.10.2.min.js"></script>
    <script src="/js/job/bootstrap.min.js"></script>
    <script src="/js/job/mian.js"></script>
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
                <li><a href="<?=Url::toRoute('/job/index')?>">招聘岗位</a></li>
                <li><a href="<?=Url::toRoute('/job/flow')?>">招聘流程</a></li>
                <li class="active"><a href="<?=Url::toRoute('/job/issue')?>">常见问题</a></li>
            </ul>
        </div>
    </div>
    <div class="mian-right">
        <div class="problem">
            <div class="problem-list">
                <div class="rubric" id="in-1" onclick="showhideone()"><span class="left">Q：我怎么参加贵公司招聘？有哪些要求？</span><span class="right"></span></div>
                <div class="answer" id="on-1">只要你是本科及以上学历，计算机相关类专业，即可参加我们的招聘。</div>
            </div>
            <div class="problem-list">
                <div class="rubric" id="in-2" onclick="showhidetwo()"><span class="left">Q：本次招聘的具体流程？</span><span class="right"></span></div>
                <div class="answer" id="on-2">（1）在线申请投递简历：每位同学可在校招官网投递1个方向的职位；。我们会根据每个职位的需求量安排简历分配。所以同学们在选择投递职位方向前，请务必慎重考虑。一旦投递成功，职位方向不可修改。另外，网申中带“*”号的项目均为必填项，若未填写或遗漏填写都将无法正常提交。<br/>
                    （2）简历筛选：我们会根据不同职位的基本要求，认真地对每一位同学的简历进行筛选，通过筛选的同学将有机会参加下一轮的选拔；<br/>
                    （3）笔试：所有同学都需要进行笔试，我们会根据同学们申请的职位方向来进行相应的安排；每个同学只有一次笔试机会，且不可调整，请根据笔试批次的时间安排，提前安排好自己的时间；<br/>
                    （4）面试：根据不同职位的要求，一般会进行2-3轮的面试，具体安排请以你收到的通知为准。<br/>
                    （5）签约入职：面试结束后，公司会第一时间通知面试结果并发放录用通知书，安排签约。
                </div>
            </div>
            <div class="problem-list">
                <div class="rubric" id="in-3" onclick="showhidethree()"><span class="left">Q：网申后我如何得知笔试和面试信息？</span><span class="right"></span></div>
                <div class="answer" id="on-3">2017年校园招聘的职位都向哪些人开我们会认真对待每一份简历。凡符合招聘基本条件的同学，都将通过电话沟通形式通知。同时，你也可以通过校招微信公众号的查询功能，随时查看你的应聘进度。</div>
            </div>
            <div class="problem-list">
                <div class="rubric" id="in-4" onclick="showhidefour()"><span class="left">Q：获得offer后是否可以提前进入公司实习？</span><span class="right"></span></div>
                <div class="answer" id="on-4">公司欢迎所有签署过就业协议的同学提前来实习，这样可以帮助同学们更快的融入公司，熟悉业务。</div>
            </div>
            <div class="problem-list">
                <div class="rubric" id="in-5" onclick="showhidefive()"><span class="left">Q：此次校园招聘的岗位具体的工作地是哪？</span><span class="right"></span></div>
                <div class="answer" id="on-5">本次校园招聘的岗位均在北京总部工作。（具体地址可看公司介绍页）</div>
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
        <p><span>版权信息</span><br/>copyright © 2014-2016 北京云杉世界信息技术有限公司 4006-135-135<br/>北京市朝阳区安贞路安贞西里5区1号楼新华金融大厦3-4层 京ICP备14045665号</p>
        <p class="none"><a href="https://credit.cecdc.com/CX20151012011563030185.html" target="_blank"><img src="/images/cert.png"></a></p>
    </div>
</div>

<script>
    function showhideone(){
        $("#on-1").slideToggle();
        $('#in-1 .right').toggleClass("right-up");
    }
    function showhidetwo(){
        $("#on-2").slideToggle();
        $('#in-2 .right').toggleClass("right-up");
    }
    function showhidethree(){
        $("#on-3").slideToggle();
        $('#in-3 .right').toggleClass("right-up");
    }
    function showhidefour(){
        $("#on-4").slideToggle();
        $('#in-4 .right').toggleClass("right-up");
    }
    function showhidefive(){
        $("#on-5").slideToggle();
        $('#in-5 .right').toggleClass("right-up");
    }
</script>

</body>
</html>