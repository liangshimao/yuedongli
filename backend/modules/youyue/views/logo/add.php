<?php
use yii\helpers\Url;
?>
<div class="pad_10">
    <div class="common-form">
        <form name="myform" action="<?php echo Url::toRoute('/youyue/logo/add'); ?>" method="post" id="myform">
            <table width="100%" class="table_form contentWrap">
                <tr>
                    <th width="100">名  称：</th>
                    <td><input type="text" name="logo[name]" value="" class="form-control-table width-160" id="name" style="display: inline" ></td>
                </tr>
                <tr>
                    <th width="100">图片信息：</th>
                    <td>
                        <img src="" id="thumb" width="200" height="150">
                        <a href="javascript:;" style="margin-left:15px;" id="thumb_select">>>点击这里选择图片</a>
                        <input type="hidden" name="logo[img_url]" value="" id="thumb_hidden">
                        <input type="file" id="thumb_file" name="thumb_file" style="display: none;">
                    </td>
                </tr>
                <tr>
                    <th width="100">描 述：</th>
                    <td><textarea class="inputStyle moretxt width-160" id="desc" placeholder="请输入描述信息" name="logo[desc]" style="display: inline; width: 350px; height: 80px;" maxlength="50"></textarea></td>
                </tr>
            </table>
            <div style="display: none;" class="btn"><input type="submit" id="dosubmit" class="dialog" name="dosubmit" value="提交"/></div>
        </form>
    </div>
</div>


<script src="/js/ajaxfileupload.js"></script>
<script>
    $(function(){
        $("#thumb_select").click(function(){
            $("#thumb_file").click();
        });
        $("#thumb_file").change(function(){
            $.ajaxFileUpload({
                url:"<?=Url::toRoute('/youyue/logo/upload')?>",
                dataType:"text",
                secureuri: false,
                fileElementId:"thumb_file",
                success:function(data){
                    var datas = jQuery.parseJSON(data);
                    $("#thumb").attr("src",datas.data.url);
                    $("#thumb_hidden").val(datas.data.url);
                }
            });
        });


        $.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){
            window.top.art.dialog({content: msg, lock: true, width: '250', height: '80'}, function () {
                this.close();
                $(obj).focus();
            })
        }});

        $("#name").formValidator({onshow:"请输入名称",onfocus:"请输入名称",oncorrect:"输入正确"}).inputValidator({min:1,onerror:"名称不能为空"});
    });
</script>
