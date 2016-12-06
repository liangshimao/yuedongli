$(document).ready(function() {
	//首页导航
	$(window).scroll(function(){
	    var top = $(window).scrollTop();   //设置变量top,表示当前滚动条到顶部的值
        if (top > 500)                      //当滚动条到顶部的值大于70时，添加类".ce2"到".ce"中
        {
			$(".nav-header").hide();
        }
		else                              //当滚动条到顶部的值小于等于70时，把".ce"中的类".ce2"删除
		{
		    $(".nav-header").hide();
		}
	});
	//上传资料提示成功
	$(".refer-btn").click(function() {
		$(".opacity-bg").fadeIn();
		$(".refer-cg").fadeIn();
		$(".confirm-qr").click(function() {
			$(".opacity-bg").fadeOut();
			$(".refer-cg").fadeOut();
		})
	})

})

