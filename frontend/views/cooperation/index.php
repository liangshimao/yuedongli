<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="en">
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
    <meta name="keywords" content="悦动力,优悦佳品,优越佳品,饮料" >
    <meta name="description" content="悦动力,优悦佳品,优越佳品,饮料">
    <link rel="shortcut icon" href="/images/youyue.ico">


    <meta name="keywords" content="悦动力,优悦佳品,优越佳品,饮料" >
    <meta name="description" content="悦动力,优悦佳品,优越佳品,饮料">
    <link rel="shortcut icon" href="/images/youyue.ico">
    <link rel="shortcut icon" href="/images/youyue.ico">
    <title>新疆优悦佳品饮料有限公司官网</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <script src="/js/jquery-1.10.2.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/mian.js"></script>
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/common.css" rel="stylesheet">
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?d90f1bc0b59424fc2fa6128b2acfd6d2";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <meta name="keywords" content="悦动力,优悦佳品,优越佳品,饮料" >
    <meta name="description" content="悦动力,优悦佳品,优越佳品,饮料">
    <link rel="shortcut icon" href="/images/youyue.ico">
    <style>
        .liuyan{
            background: #f7f7f7;
            width:100%;
            margin-bottom:5px;
        }
        #postMsg{
            background: #fafcf5;
            width: 1000px;
            margin: 0 auto;
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
                <li><a href="<?=Url::toRoute('/job/index')?>">公司招聘</a></li>
                <li class="active"><a href="<?=Url::toRoute('/cooperation/index')?>">合作共赢</a></li>
                <li><a href="<?=Url::toRoute('/download/index')?>">悦动力商城</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="cooperation-al">
    <div class="cooperation">
        <div style="padding-top:30px;">
            <p style="font-size:24px;color:deepskyblue;">优悦佳品需要您这样的供应商：</p>
            <p style="text-indent: 48px;font-size:20px;margin-top:20px;">有创业发展的激情  </p>
            <p style="text-indent: 48px;font-size:20px;margin-top:10px;">有开拓零售网店的意识和能力 </p>
            <p style="text-indent: 48px;font-size:20px;margin-top:10px;">有较好的经营服务能力和营销方法</p>
            <p style="text-indent: 48px;font-size:20px;margin-top:10px;">愿意尝试新思路和新方法</p>
        </div>

<!--        <div class="btn-link-rb"><a href="javascript:alert('暂未开放，敬请期待！');" class="red">成为优悦供应商</a><a href="javascript:alert('暂未开放，敬请期待！');" class="bule">入驻平台开店</a></div>-->
    </div>
</div>
<div class="map-icon">
    <div class="bitmap"><img width="1000" height="362" src="<?php if(empty($info->img_url)):echo '/images/bitmap.png';else:echo $info->img_url;endif;?>"></div>
    <div class="bent-list">
        <dl class="d-a">
            <dt><span><img src="/images/tel-icon.png"></span></dt>
            <dd><?php if(empty($info->phone)):echo '010-61770976';else:echo $info->phone;endif;?></dd>
        </dl>
        <dl class="d-b">
            <dt><span><img src="/images/address-icon.png"></span></dt>
            <dd><?php if(empty($info->address)):echo '新疆喀什地区喀什经济开发区深喀大道北侧喀什发展大厦';else:echo $info->address;endif;?></dd>
        </dl>
        <dl class="d-c">
            <dt><span><img src="/images/email-icon.png"></span></dt>
            <dd><?php if(empty($info->email)):echo '13381469150@163.com';else:echo $info->email;endif;?></dd>
        </dl>
        <dl class="d-d">
            <dt><span><img src="/images/mc-gzh.jpg" width="80" height="80"></span></dt>
            <dd>商城二维码</dd>
        </dl>
    </div>
</div>

<div class="liuyan">
    <form action="" id="postMsg">
        <table class="registerTable">
            <tr>
                <th colspan="3"><b style="font-size: 16px;">我要加入</b></th>
            </tr>
            <tr>
                <td class="alignRight">*</td>
                <td class="colTwo">姓名:</td>
                <td><input type="text" class="long inputText" name="name"><span id="nameTip" style="color:red;display: none;">请填写姓名</span></td>
            </tr>
            <tr>
                <td class="alignRight">*</td>
                <td class="colTwo">电话:</td>
                <td><input type="tel" class="long inputText" name="phone"><span id="phoneTip" style="color:red;display: none;">请填写电话</span></td>
            </tr>
            <tr>
                <td class="alignRight">*</td>
                <td class="colTwo">所在区域:</td>
                <td><input type="text" class="long inputText" name="zone"><span id="zoneTip" style="color:red;display: none;">请填写区域</span></td>
            </tr>
            <tr>
                <td class="alignRight">*</td>
                <td class="colTwo">地址:</td>
                <td><input type="text" class="long inputText" name="address"><span id="addressTip" style="color:red;display: none;">请填写地址</span></td>
            </tr>
        </table>
        <div class="submitWrap" style="text-align:left;">
            <span class="button buttonY" onclick="sumbit();" style="margin-left:180px;">提交</span>
        </div>
    </form>
</div>


<div class="footer-pull">
    <div class="footer">
        <p><span>关于</span><br/><a href="<?=Url::toRoute('/company/index')?>">优悦佳品</a><br/><a  href="javascript:;" style="visibility: hidden;">公司资讯</a></p>
        <p><span>联系</span><br/><a href="<?=Url::toRoute('/job/index')?>">加入我们</a><br/><a href="<?=Url::toRoute('/cooperation/index')?>">合作共赢</a></p>
        <p><span>帮助</span><br/><a href="javascript:;">新手指南</a><br/><a href="javascript:;"  style="visibility: hidden;">常见问题</a></p>
        <p><span>版权信息</span><br/>copyright © 2014-2016 新疆优悦佳品饮料有限公司 <?php if(isset($info->phone)):echo $info->phone;else:echo '4008510958';endif;?><br/>新ICP备17000073号</p>
        <p class="none"><a href="javascript:;" target="_blank"><img src="/images/cert.png"></a></p>
    </div>
</div>
<script>
    function sumbit() {
        var name = $("input[name=name]").val();
        var phone = $("input[name=phone]").val();
        var zone = $("input[name=zone]").val();
        var address = $("input[name=address]").val();
        if(name == ""){
            $("#nameTip").show();
            setTimeout(function () {
                $("#nameTip").hide();
            },3000);
            return false;
        }
        if(phone == ""){
            $("#phoneTip").show();
            setTimeout(function () {
                $("#phoneTip").hide();
            },3000);
            return false;
        }
        if(zone == ""){
            $("#zoneTip").show();
            setTimeout(function () {
                $("#zoneTip").hide();
            },3000);
            return false;
        }
        if(address == ""){
            $("#addressTip").show();
            setTimeout(function () {
                $("#addressTip").hide();
            },3000);
            return false;
        }
        $.ajax({
            url:"<?=Url::toRoute('/cooperation/operation_ajax')?>",
            dataType:"json",
            type:"post",
            data:$("#postMsg").serialize(),
            success:function(res){
                if(res.code == 200){
                    alert("提交成功!");
                    $(":input").val("");
                }else{
                    alert("提交失败,请重试");
                }
            }
        });
    }
</script>
</body>
</html>