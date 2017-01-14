<?php
use yii\helpers\Url;
?>
<div class="pad_10">
    <div class="common-form">
        <form name="myform" action="<?php echo Url::toRoute(['/youyue/info/edit','id'=>$model->id]); ?>" method="post" id="myform">
            <table width="100%" class="table_form contentWrap">
                <tr>
                    <th width="100">名  称：</th>
                    <td><input type="text" name="info[name]" value="<?=$model->name;?>" class="form-control-table width-160" id="name" style="display: inline" ></td>
                </tr>
                <tr>
                    <th width="100">图片信息：</th>
                    <td>
                        <img src="<?=$model->img_url;?>" id="thumb" width="200" height="150">
                        <a href="javascript:;" style="margin-left:15px;" id="thumb_select">>>点击这里选择图片</a>
                        <input type="hidden" name="info[img_url]" value="<?=$model->img_url;?>" id="thumb_hidden">
                        <input type="file" id="thumb_file" name="thumb_file" style="display: none;">
                    </td>
                </tr>
                <tr>
                    <th width="100">联系方式：</th>
                    <td><input type="text" name="info[phone]" value="<?=$model->phone;?>" class="form-control-table width-160" id="phone" style="display: inline" ></td>
                </tr>
                <tr>
                    <th width="100">邮  箱：</th>
                    <td><input type="text" name="info[email]" value="<?=$model->email;?>" class="form-control-table width-160" id="email" style="display: inline" ></td>
                </tr>
                <tr>
                    <th width="100">地 址：</th>
                    <td><input type="text" name="info[address]" value="<?=$model->address;?>" class="form-control-table width-160" id="address" style="display: inline" ></td>
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
                url:"<?=Url::toRoute('/youyue/info/upload')?>",
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

        $("#name").formValidator({onshow:"请输入名称",onfocus:"请输入名称",oncorrect:"输入正确"}).inputValidator({min:1,onerror:"名称不能为空"}).defaultPassed();
        $("#phone").formValidator({onshow:"请输入联系电话",onfocus:"请输入联系电话",oncorrect:"输入正确"}).inputValidator({min:1,onerror:"联系电话不能为空"}).regexValidator({regexp:"^[0-9-]+$",onerror:"联系方式格式不正确"}).defaultPassed();
        $("#email").formValidator({onshow:"请输入邮箱",onfocus:"请输入邮箱",oncorrect:"输入正确"}).inputValidator({min:1,onerror:"邮箱不能为空"}).regexValidator({regexp:regexEnum.email,onerror:"邮箱格式不正确"}).defaultPassed();
        $("#address").formValidator({onshow:"请输入公司地址",onfocus:"请输入公司地址",oncorrect:"输入正确"}).inputValidator({min:1,onerror:"公司地址不能为空"}).defaultPassed();

    });
</script>
