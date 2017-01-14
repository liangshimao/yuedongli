<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-12-7
 * Time: 下午6:35
 */
use yii\helpers\Url;
?>

<link href="/css/form.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="/css/lunbotu.css">
<link type="text/css" rel="stylesheet" href="/css/lunbotu/style.css">
<script type="text/javascript" src="/js/jquery.min2.js"></script>
<script type="text/javascript" src="/js/pirobox.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $().piroBox({
            my_speed: 400, //animation speed
            bg_alpha: 0.1, //background opacity
            slideShow : true, // true == slideshow on, false == slideshow off
            slideSpeed : 4, //slideshow duration in seconds(3 to 6 Recommended)
            close_all : '.piro_close,.piro_overlay'// add class .piro_overlay(with comma)if you want overlay click close piroBox
        });
    });
</script>
<div class="search-nav">
    <form class="form-inline" action="<?= Url::toRoute('/youyue/ico/index') ?>" method="get">
        <div class="form-group input-group-sm">
            <label for="txtName">名称：</label>
            <input class="form-control ipt" id="txtName" placeholder="名称" name="name" value="<?= empty($name) ? '' : $name ?>">
        </div>
        <div class="form-group">
            <input type="hidden" id="bannerCount" value="<?php echo $logoCount;?>">
            <button class="btn btn-default" id="btnSearch" type="submit"><i class="glyphicon glyphicon-search"></i> 查询</button>
            <button class="btn btn-default" id="btnSearch" type="button" onclick="add()"><i class="glyphicon glyphicon-plus-sign"></i> 新增</button>
        </div>
    </form>
</div>

<table class="table table-bordered table-striped table-hover table-condensed">
    <thead>
    <tr>
        <th>ID</th>
        <th>名称</th>
        <th>图片预览</th>
        <th>备注信息</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
        <?php if(!empty($info)):?>
        <tr>
            <td style="vertical-align: middle;">1</td>
            <td style="vertical-align: middle;"><?= $info->name; ?></td>
            <td style="vertical-align: middle;"><a href="<?= $info->img_url?>" class="pirobox_gall" title=""><img src="<?= $info->img_url?>" alt="<?= $info->name.'图片';?>" width="80" height="50"></a></td>
            <td style="vertical-align: middle;"><?= $info->desc; ?></td>
            <td style="vertical-align: middle;">
                <a class="btn btn-warning buttonbtn btn-info button"
                   href="javascript:window.parent.edit(1,'修改LOGO信息','<?php echo Url::toRoute(['/youyue/ico/edit', 'id' => $info->id]); ?>', 600, 420)"><i
                        class="glyphicon glyphicon-edit"></i> 修改</a>
            </td>
        </tr>
        <?php endif;?>
    </tbody>
</table>
<script type="text/javascript">
    /**
     * 添加用户
     */
    function add()
    {
        var count = $("#bannerCount").val();
        if(count >= 1)
        {
            artAlert("ICO只能添加1张");
        }else{
            omnipotent('edit','<?=Url::toRoute('/youyue/ico/add')?>', '添加ICO图', 600, 420, 0);
        }
    }

</script>
