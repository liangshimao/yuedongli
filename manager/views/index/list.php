

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="http://www.zhuyikeji.com/admin/Milecture">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">患者管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="#" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="" onChange="setStatus(this.value);">
                                    <option value="all" selected>全部</option>
                                    <option value="0" >未注册</option>
                                    <option value="1" >已注册</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="<?=\yii\helpers\Url::toRoute(['/index/add'])?>"><i class="icon-font"></i>新增作品</a>
                        <a href="javascript:sendMessageAll()"><i class="icon-font"></i>群发通知</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>发送通知</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>头像</th>
                            <th>昵称</th>
                            <th>关注时间</th>
                            <th>真实姓名</th>
                            <th>诊断结果</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        <tr>
                            <td class="tc"><input type="checkbox"></td>
                            <td>1</td>
                            <td><img src="http://wx.qlogo.cn/mmopen/GrcGsWgPB0icEQgJ7lwmWHeYwmjp0UMicSghmZ7VR3s8jVNDtWZEBnRWiaNheYFNVULz1IwF8n2lqhH5xU99K4a7vLicrg76icKSk/0" width="40" height="40"></td>
                            <td>霞光</td>
                            <td>2016-08-01</td>
                            <td></td>
                            <td></td>
                            <td>未注册</td>
                            <td>
                                <a class="link-del" href="javascript:sendMessage('oyRSawTGfIm8rjVgn76XyArERpNA')">发送通知</a>
                                <a class="link-del" href="javascript:sendMessage('oyRSawTGfIm8rjVgn76XyArERpNA')">咨询记录</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="tc"><input type="checkbox"></td>
                            <td>2</td>
                            <td><img src="http://wx.qlogo.cn/mmopen/ajNVdqHZLLArMZ2CQ1krCj40yTicnlF88NsJ00TfzfpibgWWqc4nFxhy6USPgwtWMczb0RFRz9tiaWCOKJ26vnvHQ/0" width="40" height="40"></td>
                            <td>菜芽/caiya</td>
                            <td>2016-05-24</td>
                            <td></td>
                            <td></td>
                            <td>未注册</td>
                            <td>
                                <a class="link-del" href="javascript:sendMessage('oyRSawQ4_Rp5jsBqagN5YFQIkBvA')">发送通知</a>
                                <a class="link-del" href="javascript:sendMessage('oyRSawQ4_Rp5jsBqagN5YFQIkBvA')">咨询记录</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="tc"><input type="checkbox"></td>
                            <td>3</td>
                            <td><img src="http://wx.qlogo.cn/mmopen/SiawWkFIfETB54k54eQkkuf690Q0TO5BOhrXGy5vwaMdO8UFiaqsgqWx9kqWsdDthkZD9s9T4YWibCv5bJehibk1iaEATCfDhSrtq/0" width="40" height="40"></td>
                            <td>小野人瑞瑞</td>
                            <td>2016-05-24</td>
                            <td></td>
                            <td></td>
                            <td>未注册</td>
                            <td>
                                <a class="link-del" href="javascript:sendMessage('oyRSawfAIhNS5_Y7d2O_wOum61C0')">发送通知</a>
                                <a class="link-del" href="javascript:sendMessage('oyRSawfAIhNS5_Y7d2O_wOum61C0')">咨询记录</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="tc"><input type="checkbox"></td>
                            <td>4</td>
                            <td><img src="http://wx.qlogo.cn/mmopen/sTJptKvBQLJ7fo8icsjzRyficFu0HhEjaI5Y6pAlJb09AzFGlOeRDPUfgTenMndgMSe86WuctZpg086Odz9rQ6ScicOScrMibaJt/0" width="40" height="40"></td>
                            <td>星星</td>
                            <td>2016-05-13</td>
                            <td></td>
                            <td></td>
                            <td>未注册</td>
                            <td>
                                <a class="link-del" href="javascript:sendMessage('oyRSawRtAkLLXWYo99obEUCB9Big')">发送通知</a>
                                <a class="link-del" href="javascript:sendMessage('oyRSawRtAkLLXWYo99obEUCB9Big')">咨询记录</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="tc"><input type="checkbox"></td>
                            <td>5</td>
                            <td><img src="http://wx.qlogo.cn/mmopen/ajNVdqHZLLC3wmM5843Xqpl1UmG9dW8iasohxHKXbEicAndLicawTUnRJCia2ST1K91acJm0Iht0ab4NIryCm0pw7Q/0" width="40" height="40"></td>
                            <td>Esasa</td>
                            <td>2016-05-13</td>
                            <td></td>
                            <td></td>
                            <td>未注册</td>
                            <td>
                                <a class="link-del" href="javascript:sendMessage('oyRSawVGGHKX-mNroTjo7Uc7QGvk')">发送通知</a>
                                <a class="link-del" href="javascript:sendMessage('oyRSawVGGHKX-mNroTjo7Uc7QGvk')">咨询记录</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="tc"><input type="checkbox"></td>
                            <td>6</td>
                            <td><img src="http://wx.qlogo.cn/mmopen/SiawWkFIfETBd36zMqGNH6c6pztpXGVUUia7hq4B05DAkJgOmqFYb0BJJqgKNdcCSlccefesnyuIzkqMuUy3rcibvcQ4k3iaBiax4/0" width="40" height="40"></td>
                            <td>Chenyue</td>
                            <td>2016-05-13</td>
                            <td></td>
                            <td></td>
                            <td>未注册</td>
                            <td>
                                <a class="link-del" href="javascript:sendMessage('oyRSawTQ4q9lkOZjbQLDsYNkZWU4')">发送通知</a>
                                <a class="link-del" href="javascript:sendMessage('oyRSawTQ4q9lkOZjbQLDsYNkZWU4')">咨询记录</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="tc"><input type="checkbox"></td>
                            <td>7</td>
                            <td><img src="http://wx.qlogo.cn/mmopen/kNZbBzfq6w907aSqD9Ga9s7ma5NjDMjwCBXFNEx3NpjvsiaH3aHSgT3ajMcEcwfpbhM2EoSy1bVf2ysp0F3KfLpvXvTQSicxY1/0" width="40" height="40"></td>
                            <td>qg</td>
                            <td>2016-05-13</td>
                            <td></td>
                            <td></td>
                            <td>未注册</td>
                            <td>
                                <a class="link-del" href="javascript:sendMessage('oyRSawZGKMs5p1kZGk0o1ruNK9XM')">发送通知</a>
                                <a class="link-del" href="javascript:sendMessage('oyRSawZGKMs5p1kZGk0o1ruNK9XM')">咨询记录</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="tc"><input type="checkbox"></td>
                            <td>8</td>
                            <td><img src="http://wx.qlogo.cn/mmopen/ajNVdqHZLLB9Wo8ebSjmT7b4jMOKD5licqcNXpbCpdujvThneL1HN2qZNnuQdl2U5rqe7yG11I1fqaIjYUTCKAw/0" width="40" height="40"></td>
                            <td>Rick Yang</td>
                            <td>2016-05-13</td>
                            <td></td>
                            <td></td>
                            <td>未注册</td>
                            <td>
                                <a class="link-del" href="javascript:sendMessage('oyRSawYOT6Q9Prh_nuNeOafKYy4I')">发送通知</a>
                                <a class="link-del" href="javascript:sendMessage('oyRSawYOT6Q9Prh_nuNeOafKYy4I')">咨询记录</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="tc"><input type="checkbox"></td>
                            <td>9</td>
                            <td><img src="http://wx.qlogo.cn/mmopen/ajNVdqHZLLCAmzjicfB0GXia3G52HcldNJVgmoiczYgGEsVpNs1uhxghvpcJOrosaohJW2WCzSazVvwoOHIx5vxgA/0" width="40" height="40"></td>
                            <td>小敏～兑仟</td>
                            <td>2016-05-13</td>
                            <td></td>
                            <td></td>
                            <td>未注册</td>
                            <td>
                                <a class="link-del" href="javascript:sendMessage('oyRSawQswhgsBIvtAbxRoFyV7Kk8')">发送通知</a>
                                <a class="link-del" href="javascript:sendMessage('oyRSawQswhgsBIvtAbxRoFyV7Kk8')">咨询记录</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="tc"><input type="checkbox"></td>
                            <td>10</td>
                            <td><img src="http://wx.qlogo.cn/mmopen/kNZbBzfq6w907aSqD9Ga9k9loAyMxicm3MeWwHUP9x1Nd4MlybZJ9SmTrk8CDib2lExbSbdsdxVDbWPBFwPLCeKoZjAyOmvVFV/0" width="40" height="40"></td>
                            <td>米粒儿</td>
                            <td>2016-05-13</td>
                            <td></td>
                            <td></td>
                            <td>未注册</td>
                            <td>
                                <a class="link-del" href="javascript:sendMessage('oyRSawWJZGzgOHASea1cGc7kR9Do')">发送通知</a>
                                <a class="link-del" href="javascript:sendMessage('oyRSawWJZGzgOHASea1cGc7kR9Do')">咨询记录</a>
                            </td>
                        </tr>
                    </table>
                    <div class="list-page"><a href="http://www.zhuyikeji.com/admin/Milecture/patient?status=all&page=1">上一页</a> 1/7 页<a href="http://www.zhuyikeji.com/admin/Milecture/patient?status=all&page=2">下一页</a ></div>
                </div>
            </form>
        </div>

<div id="popBoxBg"></div>
<div id="sendMessage">
    <div class="modal-header">
        <button class="close" onclick="cancel()" type="button">×</button>
        <h4 class="modal-title ng-binding" id="qunfa">发送通知</h4>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label class="col-sm-2 control-label">通知内容</label>
            <div class="col-sm-7 must">
                <input class="form-control ng-pristine ng-valid" type="text" name="Name" id="context" placeholder="请输入要发送的内容">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary ng-isolate-scope" type="button" onclick="send()">保存</button>
        <button class="btn btn-default" type="button" onclick="cancel()">取消</button>
    </div>
    <input type="hidden" id="openid" value="">
</div>
<script type="text/javascript">
    function setStatus(value){
        window.location.href = "http://www.zhuyikeji.com/admin/Milecture/patient?status="+value+"&page=1";
    }
    function sendMessage(openid)
    {
        document.getElementById("openid").value=openid;
        document.getElementById("qunfa").innerHTML="发送通知";
        document.getElementById("popBoxBg").style.display="block";
        document.getElementById("sendMessage").style.display="block";
    }
    function cancel()
    {
        document.getElementById("popBoxBg").style.display="none";
        document.getElementById("sendMessage").style.display="none";
    }
    function send()
    {
        var context=document.getElementById("context").value;
        if(context=='')
        {
            return ;
        }
        var openid=document.getElementById("openid").value;
        function sendBack()
        {
            document.getElementById("popBoxBg").style.display="none";
            document.getElementById("sendMessage").style.display="none";
            document.getElementById("context").value="";
            alert('发送成功');
        }
        var url="http://www.zhuyikeji.com/admin/MilectureRest/sendMessage?context="+context+"&openid="+openid;
        lib.get(url,sendBack);
    }
    function sendMessageAll()
    {
        document.getElementById("openid").value="all";
        document.getElementById("qunfa").innerHTML="群发通知";
        document.getElementById("popBoxBg").style.display="block";
        document.getElementById("sendMessage").style.display="block";
    }
</script>