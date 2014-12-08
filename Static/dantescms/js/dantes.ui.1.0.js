/**
 * dantesCMS 通用jquery精简ui
 * jquery版本 jquery-1.11.1.min.js 精简ui版本 dantes.ui.1.0.js
 * @return {[jquery]} [dantes.ui.1.0]
 * @author { dantes }
 * charset utf-8
 */
$(function(){
    $(".cate_ajax").mouseover(function(){
        $.ajax({
            type:"GET",
            url:"/index.php/Dantes/Content/ajax_category",
            data:{
                id:$(this).val()
            },
            success:function(response,status,xhr){
                $(".ajax_category").html(response);
            }
        });
    });
    $("#checkbox_all").click(function(){   
        if(this.checked){   
            $("input[name='tid[]']").each(function(){this.checked=true;});  
        }else{   
            $("input[name='tid[]']").each(function(){this.checked=false;});   
        }   
    });
    $("#category .level2:first").show();   
    $("#category .level2:first .level3:first").show();
    $('.level1').click(function(){
        $(this).next('.level2').slideToggle(300).siblings('.level2').slideUp(200);   
    });
    $('.level2 dt').click(function(){
        $(this).next('.level3').slideToggle(300).siblings('.level3').slideUp(200);   
    });
	$(".low-ie-bar .close").click(function(){
		$(".low-ie-bar").fadeOut();
	});
    $(".action .active").next("ol").show();
    $(".action>ul>li").click(function(){
        $(this).next("ol").slideToggle(500).siblings("ol").slideUp(300);
        $(this).addClass("active").siblings(this).removeClass("active");
    });
    /**
     * dialog弹出窗口
     */
    $(".modal").click(function(){
        var a=$(this).data('modal');
        var w=$("#"+a).width();
        var h=$("#"+a).height();
        var ml='-'+Math.round(w/2);
        var mt='-'+Math.round(h/2);
        $("#"+a).css({
            "margin-left":+ml,
            "width":+w,
            "height":+h
        });
        $("#"+a).animate({
            "top":"110px",
            opacity: 'show'
        },200);
        $("#"+a).fadeIn(200);
    });
    $(".cls").click(function(){
        var id=$(this).data('id');
        $("#"+id).fadeOut(100);
         $("#"+id).animate({
            "top":"100%",
            opacity: 'hide'
        },200);
    });
});