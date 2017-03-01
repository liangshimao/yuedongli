<?php
use yii\helpers\Url;
use backend\components\widgets\GoLinkPager;
?>

<link href="/css/form.css" rel="stylesheet">
<div class="search-nav">
    <form class="form-inline" action="<?= Url::toRoute('/youyue/duty/index') ?>" method="get">
        <div class="form-group input-group-sm">
            <label for="txtName">职业名称：</label>
            <input class="form-control ipt" id="txtName" placeholder="职业名称" name="name" value="<?= empty($name) ? '' : $name ?>">
        </div>
        <div class="form-group">
            <button class="btn btn-default" id="btnSearch" type="submit"><i class="glyphicon glyphicon-search"></i> 查询</button>
            <button class="btn btn-default" id="btnSearch" type="button" onclick="add()"><i class="glyphicon glyphicon-add"></i> 新增</button>
        </div>
    </form>
</div>
<table class="table table-bordered table-striped table-hover table-condensed">
    <thead>
    <tr>
        <th>ID</th>
        <th>职位名称</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php $k=($pages->limit) * ($pages->page);foreach ($info as $val): ?>
        <tr>
            <td><?= ++$k; ?></td>
            <td><?= $val->name; ?></td>
            <td>
                <a class="btn btn-warning buttonbtn btn-info button"
                   href='javascript:window.location.href="<?php echo Url::toRoute(['/youyue/duty/edit', 'id' => $val->id]); ?>"'><i
                        class="glyphicon glyphicon-edit"></i> 修改</a>

                <a class="btn btn-danger button"
                   href="javascript:confirmurl('<?= Url::toRoute(['/youyue/duty/delete', 'id' => $val->id]); ?>', '确定要刪除<?=$val->name?>吗?')"><i
                        class="glyphicon glyphicon-trash"></i> 删除</a>
                
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="pull-right">
    <?php echo GoLinkPager::widget(['pagination' => $pages]); ?>
</div>
<script>
    function add(){
        window.location.href="<?=Url::toRoute('/youyue/duty/add')?>";
    }
</script>

