$(document).ready(function(){
                $(".dropdown > li").click(function(){
                var $container = $(this),
                    $list = $container.find("ul");
                //var $showdrop = $(".sub_menu");
                if($list.css("display")=="none"){
                    $list.css("display","block");
                }else{
                    $list.css("display","none");
                }  
             })
            })