<?php
use yii\helpers\Url;
use \kucha\ueditor\UEditor;
?>
<form name="myform" id="myform" action="<?=Url::toRoute(['/youyue/duty/add']) ?>" method="post">
    <div class="common-form">
        <table width="100%" class="table_form contentWrap">
            <tbody>
            <tr>
                <th width="80">职位名称：</th>
                <td>
                    <input class="form-control menu_source" value="" style="width:200px" placeholder="请输入职位名称" name="name">
                    <span id="nameTip" style="color:red;display:none;">请输入职位名称</span>
                </td>
            </tr>
            <tr>
                <th width="80">职位描述：</th>
                <td>
                    <?php
                    echo UEditor::widget([
                        'name'=>'context',
                        'id'=>'context',
                        'clientOptions' => [
                            //编辑区域大小
                            'initialFrameHeight' => '400',
                            'initialFrameWidth' => '800',
                            //设置语言
                            'lang' =>'zh-cn', //中文为 zh-cn
                            //定制菜单
                            'toolbars' => [
                                [
                                    'fullscreen', 'source', 'undo', 'redo', '|',
                                    'fontsize',
                                    'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'removeformat',
                                    'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|',
                                    'forecolor', 'backcolor', '|',
                                    'lineheight',
                                ],
                            ]
                        ]]);
                    ?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div>
        <input type="submit" value="提交" class="btn btn-success" style="margin:10px 0 10px 100px;padding:8px 15px;">
        <input type="button" value="返回" class="btn btn-success" style="margin:10px;padding:8px 15px;" onclick="goback()">
    </div>
</form>
<script>
    $("#myform").submit(function(){
        var name = $("input[name=name]").val();
        if(name == ""){
            $("#nameTip").show();
            setTimeout(function(){
                $("#nameTip").hide();
            },3000);
            return false;
        }
    });
    function goback() {
        window.location.href="<?=Url::toRoute('/youyue/duty/index')?>"
    }
</script>
