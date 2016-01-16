/*var plyTimeout;
function ply() {
    $('.ply > .pic img').attr('src', $('.ply > .ctr > span').eq($('.ply > .pic').attr('fid')).attr('fsrc'));
    $('.ply > .pic img').hide();
    $('.ply > .pic > img').fadeIn(1000, function () {
        $('.ply > .pic').css('background-image', 'url(' + $('.ply > .ctr > span').eq($('.ply > .pic').attr('fid')).attr('fsrc') + ')');
        $('.ply > .ctr > span').css('background-color', '#DCDCDC');
        $('.ply > .ctr > span').eq($('.ply > .pic').attr('fid')).css('background-color', '#C90203');
    });
}
function plyAuto() {
    var len = $('.ply > .ctr > span').length;
    var index = $('.ply > .pic').attr('fid');
    index++;
    if (index >= len) {
        index = 0;
    }
    $('.ply > .pic').attr('fid', index);
    ply();
    plyTimeout = setTimeout(plyAuto, 3000);
}
function newplay() {
    var len = $('.newply > .bar > .lst > span').length;
    var index = $('.newply').attr('fid');
    index++;
    if (index >= len) {
        index = 0;
    }
    $('.newply').attr('fid', index);
    $('.newply').css('background-image', 'url(' + $('.newply > .bar > .lst > span').eq($('.newply').attr('fid')).attr('fsrc') + ')');
    $('.newply > .bar > .txt').html($('.newply > .bar > .lst > span').eq($('.newply').attr('fid')).attr('ftxt'));
    $('.newply > .bar > .lst > span').css('background-color', '#000000');
    $('.newply > .bar > .lst > span').eq($('.newply').attr('fid')).css('background-color', '#797979');
    setTimeout(newplay, 2000);
}
$().ready(function () {
    $('.ply > .prev').click(function () {
        var index = $('.ply > .pic').attr('fid');
        index--;
        if (index < 0) {
            index = $('.ply > .ctr > span').length - 1;
        }
        $('.ply > .pic').attr('fid', index);
        $('.ply > .pic > img').stop();
        clearTimeout(plyTimeout);
        ply();
        plyTimeout = setTimeout(plyAuto, 1000);
    });
    $('.ply > .next').click(function () {
        var len = $('.ply > .ctr > span').length;
        var index = $('.ply > .pic').attr('fid');
        index++;
        if (index >= len) {
            index = 0;
        }
        $('.ply > .pic').attr('fid', index);
        $('.ply > .pic > img').stop();
        clearTimeout(plyTimeout);
        ply();
        plyTimeout = setTimeout(plyAuto, 3000);
    });
    $('.ply > .ctr > span').click(function () {
        var index = $(this).index();
        $('.ply > .pic').attr('fid', index);
        $('.ply > .pic > img').stop();
        clearTimeout(plyTimeout);
        ply();
        plyTimeout = setTimeout(plyAuto, 3000);
    });
    plyTimeout = setTimeout(plyAuto, 3000);
    setTimeout(newplay, 2000);
});*/
 /*Tab 选项卡*/
 $(document).ready(function() {
	  var _banner = 0;
    $(".banner_pic ul li").hover(function(){
	     var _index = $(this).index();
		  $(".banner_pic ul li").eq(_index).addClass("pic_hover").siblings().removeClass("pic_hover");
		  $(".banner_box ul li").eq(_index).css("display","block").siblings().css("display","none");
	 
	 });
	  $(".by_option li").click(function(){
		   var a = $(this).index();
		   $(".by_option li").eq(a).addClass("hover1");
		   $(".by_table li").eq(a).css("display","block").siblings().css("display","none");
		  });
	  $(".tabtop .item").hover(function(){
		    var b = $(this).index();
			
		  });
	  	 $("#tuijian .tab .item").hover(function(){
		    var t = $(this).index();
			$("#tj_main ul li").eq(t).css("display","block").siblings().css("display","none");
			
		  }); 
		  
	     $("#remen_main .nav .item").hover(function(){
		    var r = $(this).index();
			$("#lst_list ul li").eq(r).css("display","block").siblings().css("display","none");
			
		  }); 
		
        //change    
        $("#tab_nav .item").eq(0).addClass("hov_ave");
		$("#tab_nav .item").hover(function(){
		    var _tab = $(this).index();
            if(_tab!=0){
                $(this).addClass("hov_ave");
                $(this).siblings().removeClass("hov_ave");
                $("#main_tab ul li").eq(_tab).css("display","block").siblings().css("display","none");  
            }else{
                $("#tab_nav .item").eq(0).addClass("hov_ave");
                $("#tab_nav .item").eq(0).siblings().removeClass("hov_ave");
                $("#main_tab ul li").eq(_tab).css("display","block").siblings().css("display","none");
            }
        });    
		  
		   $("#nav_shop .item").hover(function(){
		    var shop = $(this).index();
			
			$("#shop_main ul li").eq(shop).css("display","block").siblings().css("display","none");
			
		  }); 
		  
		  

	$(".banner_button ul li").hover(function(){
		  
		    var _banner = $(this).index();
			 $(".banner_button ul li").eq(_banner).addClass("butt_bgcolor").siblings().removeClass("butt_bgcolor");
//			$(".box_img li").eq(_banner).css("display","block").siblings().css("display","none");
 $(".index_con ul").animate({left:-_banner*990},300);
		  
		  
		  
		  
		 
	});

    //big banner
    $(".big_banner_button ul li").hover(function(){
        var _banner = $(this).index();
        $(".big_banner_button ul li").eq(_banner).addClass("butt_bgcolor").siblings().removeClass("butt_bgcolor");
           $(".big_box_img li").eq(_banner).css("z-index","1001").siblings().css("z-index","1000");
    });
//	
//	$(".zy_left").click(function(){
//		 		
//		   
//		     var _banner = 0;
//		 
//			 
//			  
//		  });
//		  
//		  $(".zx-right").click(function(){
//				_banner++;
//					 var len = $(".box_img li").length;
//					 alert(len);
//					if(_banner+3>len){
//						$(".box_img").stop().append($(".box_img").html());
//						}
//					  $(".box_img").stop().animate({right:-_banner*960},500);
//				
//				});
		
			  
   $(".imgnav li").click(function(){
	       var imgnav =$(this).index();
		    $(".imgnav li").eq(imgnav).addClass("imgnavhover").siblings().removeClass("imgnavhover");
	        $("#page1 .pagecontent").eq(imgnav).css("display","block").siblings().css("display","none");
	   })
	  
   $(".right_news a").hover(function(){
   	  var __index = $(this).index(); 
   	  $(".right_news a").eq(__index).addClass("news_hover").siblings().removeClass("news_hover");
	    $(".dealer_news").eq(__index).show().siblings("div").hide();
   });
   
   $(".footer_nav a").hover(function(){
   	  var _new = $(this).index();  
   	  $(".footer_nav a").eq(_new).addClass("hover_news").siblings().removeClass("hover_news");
	  $("#xinwen li.xinwen_list").eq(_new).show().siblings().hide();
   	
   	
   });
   
   //滚动出现导航栏
    $(function () {
        $(window).scroll(function(){
            if ($(window).scrollTop()>300){
                $(".show-header").fadeIn(1500);
            }
            else{
               $(".show-header").fadeOut(1500);
            }
        });
      });
   //慧车商城 平行进口部分
   // $(".import").mouseover(function(){
   //    $(this).css("border","none");
   // })
   // $(".import").mouseout(function(){
   //  $(this).css("border","border: 1px solid #ccc");
   // })
   
 
});










 