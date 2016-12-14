<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 16-11-24
 * Time: 下午2:47
 */
use yii\helpers\Url;
?>
<form name="myform" id="myform" action="<?=Url::toRoute(['/youyue/company/add']) ?>" method="post">
    <div class="common-form">
        <table width="100%" class="table_form contentWrap">
            <tbody>
            <tr>
                <th width="80">介绍标题：</th>
                <td>
                    <input class="form-control menu_source" value="" id="url" style="width:200px" placeholder="请输入介绍标题" name="url">
                </td>
            </tr>
            <tr>
                <th width="80">介绍状态：</th>
                <td>
                    <input type="radio" value="1" name="status" checked>启用
                    <input type="radio" value="0" name="status" >备用
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <input name="dosubmit" style="display: none" id="dosubmit" type="submit" value="提交" class="dialog">
</form>
