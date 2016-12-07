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


<table class="table table-bordered table-striped table-hover table-condensed">
    <thead>
    <tr>
        <th>ID</th>
        <th>名称</th>
        <th>图片地址</th>
        <th>备注信息</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php $k=0;foreach ($info as $val): ?>
        <tr>
            <td><?= ++$k; ?></td>
            <td><?= $val->name; ?></td>
            <td><?= $val->img_url; ?></td>
            <td><?= $val->note; ?></td>
            <td>
                <a class="btn btn-warning buttonbtn btn-info button"
                   href="javascript:omnipotent('edit','查看图片','<?php echo Url::toRoute(['/youyue/banner/info', 'id' => $val->id]); ?>', 600, 300)"><i
                        class="glyphicon glyphicon-zoom-in"></i> 预览大图</a>
                <a class="btn btn-warning buttonbtn btn-info button"
                   href="javascript:window.parent.edit(1,'修改用户信息','<?php echo Url::toRoute(['/youyue/banner/edit', 'id' => $val->id]); ?>', 600, 300)"><i
                        class="glyphicon glyphicon-edit"></i> 修改</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

