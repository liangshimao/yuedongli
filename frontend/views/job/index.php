<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>公司招聘-悦动力-新疆优悦佳品饮料有限公司</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta content="width=1200" name="viewport">
    <meta name="keywords" content="悦动力,优悦佳品,优越佳品,饮料" >
    <meta name="description" content="悦动力,优悦佳品,优越佳品,饮料">
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
        .thead {
            background: #f2f2f2 none repeat scroll 0 0;
            font-size: 16px;
            height: 46px;
            line-height: 46px;
            margin-bottom:10px;
        }
        .thead .a {
            float: left;
            text-align: center;
            width: 220px;
        }
    </style>
</head>

<body>
<nav class="nav-header-bot">
    <div class="nav-width-bot">
        <div class="logo"><a href="<?=Url::toRoute('/index/index')?>"><img src="<?php if(empty($logo)):echo '/images/logo.png';else:echo $logo;endif;?>" /></a></div>
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
                <!--                <li><a href="--><?//=Url::toRoute('/job/index')?><!--">招聘岗位</a></li>-->
                <!--                <li><a href="--><?//=Url::toRoute('/job/flow')?><!--">招聘流程</a></li>-->
                <li class="active"><a href="<?=Url::toRoute('/job/index')?>">招聘岗位</a></li>
            </ul>
        </div>
    </div>
    <div class="mian-right">
        <div class="problem">
            <div class="thead"><span class="a" style="width:120px;">职位名称</span></div>
            <?php if(empty($job)):?>
            <div class="problem-list">
                <div class="rubric" id="in-1" onclick="showhideone()"><span class="left" style="margin-left:16px;">招商经理</span><span class="right"></span></div>
                <div class="answer" id="on-1">岗位职责：<br/>
                    1、负责招商工作和开发客户， 完成每月招商部下达的招商任务；<br/>
                    2、负责客户拜访及回访，做好客户问题的回答， 并热情向其推荐合适的经营场地；<br/>
                    3、负责招商、记录客户档案、整理客户资料；<br/>
                    4、做好市场调研、客户分析工作并及时反应市场信息；<br/>
                    5、负责客户资料的搜集与整理；<br/>
                    6、负责客户定期拜访、回访客户, 并及时反映客户问题；<br/>
                    7、协助招商经理或招商主管做好疑难客户的处理工作；<br/>
                    8、协助完成各种招商说明会及推荐会等活动的召开举行；<br/>
                    9、协助财务部完成客户的签约及收款；<br/>
                    10、负责每日客户接待,认真讲解招商政策， 回答客户疑问；<br/>
                    11、完成招商工作， 积累客户并建立客户档案；<br/>

                    <p style="margin-top:10px;">工作地点：华北地区</p>
                </div>
            </div>
            <div class="problem-list">
                <div class="rubric" id="in-2" onclick="showhidetwo()"><span class="left" style="margin-left:16px;">销售代表</span><span class="right"></span></div>
                <div class="answer" id="on-2">
                    岗位职责：<br/>
                    1、负责指定区域快销品终端市场的维护和开拓；<br/>
                    2、确保每天完成足够数量的客户拜访；<br/>
                    3、通过拜访了解产品库存、摆放、陈列、需求，并视情况亲自动手帮助客户做好产品冰柜和柜台陈列，了解客户心理、最终完成每月的订单任务；<br/>
                    4、积极培养和建立与客户的感情，通过卓越的工作表现帮助客户和公司实现双赢；<br/>
                    5、能独立开拓快销品市场尤佳。<br/><br/>
                    岗位要求：<br/>
                    1、二年以上快速消费品行业销售经验，积极进取，具良好的沟通协调及市场开拓能力，能吃苦耐劳，承受工作压力。<br/>
                    2、能自备交通工具。<br/>
                    3、以当地或能长驻当地的优先<br/><br/>

                    工作地点：松滋乡镇<br/><br/>

                    一经录用享有：<br/>
                    1、薪资构成：基本薪资+绩效奖+福利金+年终奖；<br/>
                    2、每年有加薪机会；<br/>
                    3、双休、法定节假日，工作满一年可享受带薪年假；<br/>
                    4、入职即办理五险＋公积金<br/>
                </div>
            </div>
            <div class="problem-list">
                <div class="rubric" id="in-3" onclick="showhidethree()"><span class="left" style="margin-left:16px;">重点客户销售代表</span><span class="right"></span></div>
                <div class="answer" id="on-3">
                    工作职责：<br/>
                    1、负责销量指标的分解完成；<br/>
                    2、确保产品陈列生动化达标；<br/>
                    3、负责理货组长及理货员综合管理；<br/>
                    4、负责所管辖门店服务和问题解决；<br/>
                    5、其他行政工作和横向协调等。<br/><br/>
                    任职资格：<br/>
                    1、高中及以上，30-40岁，3至5年以上卖场、超市、便利等快速消费品行业门店销售经验优先；<br/>
                    2、有基本服务卖场、超市、便利或卖场相关管理工作经验，有一定领悟力和独立沟通能力，一定的数据分析能力；<br/>
                    3、开朗外向易于沟通，快速反应能力和良好的应变能力，体力充沛，能承受工作压力；<br/>
                    4、通过短期培训和工作实践能较快适应工作内容；能高度认同公司企业文化，并能自觉遵守公司规章制度，积极进取，善于和乐于团队管理。<br/><br/>

                    工作地点：汉口、武昌、汉阳、关山<br/><br/>

                    一经录用享有：<br/>
                    1、薪资构成：基本薪资+绩效奖+福利+年终奖；<br/>
                    2、每年有加薪机会；<br/>
                    3、双休、法定节假日，工作满一年可享受带薪年假；<br/>

                </div>
            </div>
            <?php else: foreach ($job as $key=>$value):?>
                <div class="problem-list">
                    <div class="rubric"><span class="left" style="margin-left:16px;"><?=$value->name;?></span><span class="right"></span></div>
                    <div class="answer">
                        <?=$value->context?>
                    </div>
                </div>
            <?php endforeach;endif;?>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="footer-pull">
    <div class="footer">
        <p><span>关于</span><br/><a href="<?=Url::toRoute('/company/index')?>">优悦佳品</a><br/><a  href="javascript:;">公司资讯</a></p>
        <p><span>联系</span><br/><a href="<?=Url::toRoute('/job/index')?>">加入我们</a><br/><a href="<?=Url::toRoute('/cooperation/index')?>">合作共赢</a></p>
        <p><span>帮助</span><br/><a href="javascript:;">新手指南</a><br/><a href="javascript:;">常见问题</a></p>
        <p><span>版权信息</span><br/>copyright © 2014-2016 新疆优悦佳品饮料有限公司 010-61770976<br/>新ICP备17000073号</p>
        <p class="none"><a href="javascript:;" target="_blank"><img src="/images/cert.png"></a></p>
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

    $(".rubric").click(function(){
        $(this).next(".answer").slideToggle();
        $(this).find(".right").toggleClass("right-up");
    });
</script>

</body>
</html>