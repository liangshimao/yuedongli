
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="http://www.zhuyikeji.com/admin/Milecture">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="http://www.zhuyikeji.com/admin/Milecture/lecture">讲座管理</a><span class="crumb-step">&gt;</span><span>新增讲座</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="http://www.zhuyikeji.com/admin/Milecture/lectureAddSubmit" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th width="120"><i class="require-red">*</i>分类：</th>
                            <td>
                                <select name="status" id="catid" class="required">
                                    <option value="1" selected>进行中</option>
                                    <option value="0">往期内容</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>主讲医生：</th>
                            <td>
                                <input class="common-text required" id="doctor" name="doctor" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>所在医院：</th>
                            <td><input class="common-text" name="hospital" size="50" value="" type="text"></td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>医生头像：</th>
                            <td><input name="smallimg" id="" type="file"><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                        </tr>
                        <tr>
                            <th>讲座主题：</th>
                            <td><input class="common-text" name="title" size="50" value="" type="text"></td>
                        </tr>
                        <tr>
                            <th>讲座时间：</th>
                            <td><input class="common-text" name="date" size="50" value="" type="text"></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                            </td>
                        </tr>
                        </tbody></table>
                </form>
            </div>
        </div>