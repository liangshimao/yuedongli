<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-12-7
 * Time: 下午6:35
 */
use yii\helpers\Url;
use backend\components\widgets\GoLinkPager;
?>

<link href="/css/form.css" rel="stylesheet">

<div class="search-nav">
    <button class="btn btn-default" id="btnAdd" type="button" onclick="create()"><i class="glyphicon glyphicon-search"></i> 新增</button>
</div>
<table class="table table-bordered table-striped table-hover table-condensed">
    <thead>
    <tr>
        <th>ID</th>
        <th>名称</th>
        <th>正文</th>
        <th>修改时间</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php $k=($pages->limit) * ($pages->page);foreach ($info as $val): ?>
        <tr>
            <td><?= ++$k; ?></td>
            <td><?= $val->name; ?></td>
            <td><?= $val->img_url; ?></td>
            <td><?= $val->note; ?></td>
            <td>
                <a class="btn btn-warning buttonbtn btn-info button"
                   href="javascript:omnipotent('edit','<?php echo Url::toRoute(['/youyue/company/edit', 'id' => $val->id]); ?>','编辑公司介绍', 600, 300)"><i
                        class="glyphicon glyphicon-zoom-in"></i> 预览大图</a>
                
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="pull-right">
    <?php echo GoLinkPager::widget(['pagination' => $pages,'go' => false]); ?>
</div>

<script>
    function create()
    {
        omnipotent('edit','<?php echo Url::toRoute(['/youyue/company/add']);?>','新增公司介绍', 600, 300);
    }
</script>

