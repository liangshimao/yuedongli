<?php
use yii\helpers\Url;

?>
<!DOCTYPE html>
<html>
<head>
    <title>新疆优悦佳品饮料有限公司官网</title>
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


    <div class="profile">
        <div class="title">公司概况</div>
        <div class="info-text">2015年7月优悦佳品有限公司成立。<br/><br/>

            新疆（北京）优悦佳品饮料有限公司总部位于新疆喀什经济开发区喀什大厦,公司主要从事四大版块业务，“互联网＋OEM＋便利店＋会员制消费”。<br/><br/>

            “优悦佳品”低调进入快消领域之前，与香港品尊实业有限公司达成协议高价收购了具有巨大市场成长潜力的“悦动力”品牌。并于2015年10月与北京广东健力宝饮料有限公司强强联合。铸就了即将引爆快消领域的产品。“优悦佳品”目前主要从事饮用天然水和饮料系列产品的科研、开发、生产与营销。<br/><br/>

            2015年“悦动力”品牌上市以来产品不断受到消费者的青睐，公司将陆续开发并于2017年1月陆续上市：功能型饮品-电解质果茶、果汁饮品-100%进口果酱系列、550ml饮用水、天然水系列“优悦佳品”相信通过我们的努力会得到广大消费者认可和喜爱。
        </div>
    </div>


    <div class="history">
        <div class="title">发展历程</div>
        <div class="hist-year">
            <ul>
                <li><span class="month">8月</span><span class="text">斥资五千万成立了优悦佳品（北京）电子商务有限公司。潜心发展电商平台。</span></li>
                <li><span class="month">2月</span><span class="text">北京分公司成立，并相继在华北、华中、西北、东北三省进行了铺市，复购率极高。</span></li>

                <li><span class="month">9月</span><span class="text">北京广东健力宝饮料有限公司达成强强合作，并签署合作协议。</span></li>
                <li><span class="month">8月</span><span class="text">优悦佳品旗下“悦动力品牌”330ml果味产品上市。<br/><em>产品热卖后相继又在山西地区进行试点，受到消费者喜爱。</em></span></li>
                <li><span class="month">7月</span><span class="text">投资500万元人民币新疆（北京）优悦佳品饮料有限公司成立。</span></li>
            </ul>
            <p class="year-a" style="top:-9%">2016年 >></p>
            <p class="year-b" style="top:32%">2015年 >></p>
        </div>
    </div>


    <div class="idea">
        <div class="title">优悦理念</div>
        <div class="promise">
            <p><span>选择大于努力，成功只因有您。悦动力，悦生活。</span></p>
<!--            <div class="info">优悦佳品前期以中小型餐饮商户为切入点，专注为全国近1000万家餐厅提供一站式、全品类且更低价、更新鲜的餐饮原材料采购服务。<br/><br/>-->
<!--                为客户提供省时省力、省钱省心的原材料，实现全程无忧的采购。通过对采购、质检、仓储、物流等流程科学精细化的管理，解决农民农产品滞销问题。-->
<!--            </div>-->
        </div>
        <div class="mission">
            <div class="mc-block">
                <div class="name sm"><span>优悦使命</span></div>
                <div class="info">让我们的产品随处可见触手可及<br/>
                    满足和激发消费者的购买欲使其物超所值</div>
            </div>
            <div class="mc-block">
                <div class="name yj"><span>优悦愿景</span></div>
                <div class="info">成为中国饮品行业发展最快最好的新势力<br/>
                    成为优悦佳品集团的重要增长引擎<br/>
                    成为最受信赖的雇主品牌<br/>
                </div>
            </div>
            <div class="mc-block none">
                <div class="name jzg"><span>优悦价值观</span></div>
                <div class="info">创新：积极参与头脑风暴<br/>欢迎他人从不同的角度提出见解和意见<br/>
                    诚信：在日常生活中行为<br/>正直信任他人并被他人所信任<br/>
                    必胜：在追求目标过程中<br/>展现出全力以赴的意志力和行动<br/>
                    尊重：善于欣赏他人的优<br/>点和价值接纳他人的不同想法<br/>
                </div>
            </div>
        </div>
        <div class="dream">
            <p>优悦正能量</p>
            <div class="info">
                我们是一支年轻的团队，我们是一群怀揣梦想的人.
                在这里没有勾心斗角尔虞我诈，没有霸道专横独裁统治.<br/><br/>
                这里有的，只是一帮有理想有抱负的奋斗族，一群充满快乐和正能量的小伙伴和一次前途光明可遇而不可求的创业机会<br/><br/>
                我们不会高谈论阔，我们不爱画饼充饥，我们只是踏实进取.
                我们不仅是一家创业公司，更是一片筑梦空间。<br/><br/>
                我们用靠谱的技术堆砌梦想的堡垒，用丰富的经验助力梦想的脚步，永不停歇<br/><br/>
            </div>
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