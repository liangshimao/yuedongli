<?php
use yii\helpers\Url;
use backend\widgets\GoLinkPager;

?>
<link href="/css/form.css" rel="stylesheet">

<div class="search-nav">
    <form class="form-inline" action="<?= Url::toRoute('/basic/user/index') ?>" method="get">
        <div class="form-group input-group-sm">
            <label for="txtName">用户名：</label>
            <input class="form-control ipt" id="txtName" placeholder="用户名" name="name" value="<?= empty($name) ? '' : $name ?>">
        </div>
        <div class="form-group">
            <button class="btn btn-default" id="btnSearch" type="submit"><i class="glyphicon glyphicon-search"></i> 查询</button>
            <button class="btn btn-default" id="btnSearch" type="button" onclick="add()"><i class="glyphicon glyphicon-plus-sign"></i> 新增</button>
        </div>
    </form>

</div>

<table class="table table-bordered table-striped table-hover table-condensed">
    <thead>
    <tr>
        <th>ID</th>
        <th>用户名</th>
        <th>真实姓名</th>
        <th>手机号</th>
        <th>状态</th>
        <th>注册时间</th>
        <th>最后登录时间</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($info as $val): ?>
        <tr>
            <td><?= $val->id; ?></td>
            <td><?= $val->username; ?></td>
            <td><?= $val->realname; ?></td>
            <td><?= $val->mobile; ?></td>
            <td><?php echo $val->status == 0 ? '<i class="glyphicon glyphicon-ok-sign font-green">' : '<i class="glyphicon glyphicon-remove-sign font-red">' ?></td>
            <td><?= $val->add_time; ?></td>
            <td><?= $val->login_time; ?></td>
            <td>
                <a class="btn btn-warning buttonbtn btn-info button"
                   href="javascript:window.parent.edit(1,'修改用户','<?php echo Url::toRoute(['/sys/user/edit', 'id' => $val->id]); ?>', 600, 500)"><i
                        class="glyphicon glyphicon-edit"></i> 修改</a>
                <a class="btn btn-danger button"
                   href="javascript:confirmurl('<?= Url::toRoute(['/sys/user/delete', 'id' => $val->id]); ?>', '确定要刪除吗?')"><i
                        class="glyphicon glyphicon-trash"></i> 删除</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="pull-right">
    <?php echo GoLinkPager::widget(['pagination' => $pages]);?>
</div>

<script type="text/javascript">
    /**
     * 添加用户
     */
    function add() {
        window.top.art.dialog({
                title: '添加用户',
                id: 'add',
                iframe: '<?php echo Url::toRoute('/sys/user/add'); ?>',
                width: '600px',
                height: '500px'
            },
            function () {
                var d = window.top.art.dialog({id: 'add'}).data.iframe;
                var form = d.document.getElementById('dosubmit').click();
                return false;
            },
            function () {
                window.top.art.dialog({id: 'add'}).close()
            }
        );
    }

</script>