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
    <style>
        .submitWrap{margin:20px 0; text-align:center;line-height: 24px;}
        .button{display:inline-block; background:url(/images/btnBg.jpg) -225px 0 no-repeat; font-size:14px; padding:2px 26px 3px; margin-left:8px; cursor:pointer;line-height: 25px;}
    </style>
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
        <div class="title">优悦理念</div>
        <div class="promise">
            <p><span>优悦佳品需要您这样的供应商：<br/><br/></span>
                <p style="color:black;">有创业发展的激情<br/>
                有开拓零售网店的意识和能力<br/>
                有较好的经营服务能力和营销方法<br/>
                愿意尝试新思路和新方法<br/></p>
            </p>

        </div>

        <div class="bitmap"><img width="1000" height="200" src="<?php if(empty($info->img_url)):echo '/images/bitmap.png';else:echo $info->img_url;endif;?>"></div>
        <div class="promise">
            <div class="info">
                电话：<?php if(empty($info->phone)):echo '010-61770976';else:echo $info->phone;endif;?><br/>
                地址：<?php if(empty($info->address)):echo '新疆喀什经济开发区深喀大道北侧喀什发展大厦';else:echo $info->address;endif;?><br/>
                邮箱：<?php if(empty($info->email)):echo '13381469150@163.com';else:echo $info->email;endif;?><br/>
            </div>
        </div>




        <div class="liuyan" style="margin-left: 5px;">
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
                        <td class="colTwo">区域:</td>
                        <td><input type="text" class="long inputText" name="zone"><span id="zoneTip" style="color:red;display: none;">请填写区域</span></td>
                    </tr>
                    <tr>
                        <td class="alignRight">*</td>
                        <td class="colTwo">地址:</td>
                        <td><input type="text" class="long inputText" name="address"><span id="addressTip" style="color:red;display: none;">请填写地址</span></td>
                    </tr>
                </table>
                <div class="submitWrap" style="text-align:left;">
                    <span class="button buttonY" onclick="sumbit();" style="margin-left:120px;">提交</span>
                </div>
            </form>
        </div>

    </div>

    <footer class="footer">
        <p>copyright © 2014-2016 新疆优悦佳品饮料有限公司<br/>
            010-61770976 &nbsp;</p>
        <p class="xin"><a href="javascript:;"><img src="/images/xin.png"></a>
        </p>
    </footer>
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