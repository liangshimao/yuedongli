/**
 * Created by smile on 16-9-27.
 */
$(document).ready(function() {

    $(".people-1").mouseover(function(){
        $(".people-1").animate({top:'390px'},200);
        $(".people-2").animate({top:'515px'},200);
        $(".people-3").animate({top:'545px'},200);
        $(".people-4").animate({top:'420px'},200);
    });
    $(".people-2").mouseover(function(){
        $(".people-1").animate({top:'420px'},200);
        $(".people-2").animate({top:'485px'},200);
        $(".people-3").animate({top:'545px'},200);
        $(".people-4").animate({top:'420px'},200);
    });
    $(".people-3").mouseover(function(){
        $(".people-1").animate({top:'420px'},200);
        $(".people-2").animate({top:'515px'},200);
        $(".people-3").animate({top:'515px'},200);
        $(".people-4").animate({top:'420px'},200);
    });
    $(".people-4").mouseover(function(){
        $(".people-1").animate({top:'420px'},200);
        $(".people-2").animate({top:'515px'},200);
        $(".people-3").animate({top:'545px'},200);
        $(".people-4").animate({top:'390px'},200);
    });
    $(document).bind("mouseover",function(e){
        var target  = $(e.target);
        if(target.closest(".people-1,.people-2,.people-3,.people-4").length == 0){/*.closest()娌� DOM 鏍戝悜涓婇亶鍘嗭紝鐩村埌鎵惧埌宸插簲鐢ㄩ€夋嫨鍣ㄧ殑涓€涓尮閰嶄负姝紝杩斿洖鍖呭惈闆朵釜鎴栦竴涓厓绱犵殑 jQuery 瀵硅薄銆�*/
            $(".people-1").animate({top:'420px'},200);
            $(".people-2").animate({top:'515px'},200);
            $(".people-3").animate({top:'545px'},200);
            $(".people-4").animate({top:'420px'},200);
        };
        e.stopPropagation();
    })

})

