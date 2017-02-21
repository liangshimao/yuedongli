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
    <form class="form-inline" action="<?= Url::toRoute('/youyue/operation/index') ?>" method="get">
        <div class="form-group input-group-sm">
            <label for="txtName">姓名：</label>
            <input class="form-control ipt" id="txtName" placeholder="姓名" name="name" value="<?= empty($name) ? '' : $name ?>">
        </div>
        <div class="form-group">
            <button class="btn btn-default" id="btnSearch" type="submit"><i class="glyphicon glyphicon-search"></i> 查询</button>
        </div>
    </form>
</div>
<table class="table table-bordered table-striped table-hover table-condensed">
    <thead>
    <tr>
        <th>ID</th>
        <th>姓名</th>
        <th>电话</th>
        <th>所在区域</th>
        <th>地址</th>
    </tr>
    </thead>
    <tbody>
    <?php $k=($pages->limit) * ($pages->page);foreach ($info as $val): ?>
        <tr>
            <td><?= ++$k; ?></td>
            <td><?= $val->name; ?></td>
            <td><?= $val->phone; ?></td>
            <td><?= $val->zone; ?></td>
            <td><?= $val->address; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="pull-right">
    <?php echo GoLinkPager::widget(['pagination' => $pages,'go' => false]); ?>
</div>

