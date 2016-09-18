
<div class="crumb-wrap">
    <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span>欢迎使用『助医健康微讲堂』服务号后台。</span></div>
</div>
<div class="result-wrap">
    <div class="result-title">
        <h1>快捷操作</h1>
    </div>
    <div class="result-content">
        <div class="short-wrap">
            <a href=""><i class="icon-font">&#xe001;</i>查看患者</a>
            <a href="#"><i class="icon-font">&#xe005;</i>新增讲座</a>
            <a href="#"><i class="icon-font">&#xe048;</i>新增作品</a>
            <a href="#"><i class="icon-font">&#xe041;</i>新增文章</a>
            <a href="#"><i class="icon-font">&#xe01e;</i>查看咨询</a>
        </div>
    </div>
</div>
<div class="result-wrap">
    <div class="result-title">
        <h1>系统基本信息</h1>
    </div>
    <div class="result-content">
        <ul class="sys-info-list">
            <li>
                <label class="res-lab">微信服务号</label><span class="res-info">助医健康微讲堂</span>
            </li>
            <li>
                <label class="res-lab">关注人数</label><span class="res-info">70人</span>
            </li>
            <li>
                <label class="res-lab">注册人数</label><span class="res-info">3人</span>
            </li>
            <li>
                <label class="res-lab">讲座期数</label><span class="res-info">0期</span>
            </li>
            <li>
                <label class="res-lab">咨询条数</label><span class="res-info">43次</span>
            </li>
            <li>
                <label class="res-lab">北京时间</label><span class="res-info">2016-09-18&nbsp;&nbsp;&nbsp;</span><span class="res-info" id="beijingtime"></span>
            </li>
        </ul>
    </div>
</div>
<div class="result-wrap">
    <div class="result-title">
        <h1>使用帮助</h1>
    </div>
    <div class="result-content">
        <ul class="sys-info-list">
            <li>
                <label class="res-lab">官方交流网站：</label><span class="res-info"><a href="#" title="有主机上线设计" target="_blank">www.zhuyikeji.com</a></span>
            </li>
            <li>
                <label class="res-lab">官方交流QQ群：</label><span class="res-info"><a class="qq-link" target="_blank" href="http://user.qzone.qq.com/913737303/infocenter?ptsig=fwuIGucgSq7VB3N8vMjtbG8F-lEbvyN44NaOi-8MrHw_"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="JS-前端开发" title="JS-前端开发"></a> </span>
            </li>
        </ul>
    </div>
</div>
<script>
    window.onload=startTime();

    function startTime()
    {
        var today=new Date();
        var h=today.getHours();
        var m=today.getMinutes();
        var s=today.getSeconds();
        // add a zero in front of numbers<10
        m=checkTime(m);
        s=checkTime(s);
        document.getElementById('beijingtime').innerHTML=h+":"+m+":"+s;
        setTimeout('startTime()',500);
    }

    function checkTime(i)
    {
        if (i<10)
        {i="0" + i}
        return i
    }
</script>
