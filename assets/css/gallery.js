window.onload= function(){
	var linkCont = document.getElementById('main_tab');
    var link = linkCont.getElementsByTagName('a');
    var pic = document.getElementById('galleryPic');
    //alert(link.length);
    for(var i=0;i<link.length;i++){
    	link[i].setAttribute("href",i);
    	link[i].onmouseover = function(){
    		//alert(link[i].innerHTML);
    		var flag = this.getAttribute("href");
            pic.setAttribute("src","images/gallery"+i+".jpg");
            //alert(pic.getAttribute("src"));
            pic.setAttribute("alt","我是第"+flag+"张品牌图片");
    	}
    }

    //热门车型
    var carCont = document.getElementById('remen_main');
    var carLink = carCont.getElementsByTagName('a');
    var carPic = document.getElementById('hotPic1');
    for(var i=0;i<carLink.length;i++){
        carLink[i].setAttribute("href",i);
        carLink[i].onmouseover = function(){
            //alert(link[i].innerHTML);
            var flag = this.getAttribute("href");
            carPic.setAttribute("src","images/galleryhot"+i+".jpg");
            //alert(pic.getAttribute("src"));
            carPic.setAttribute("alt","我是第"+flag+"张热门车型图片");
        }
    }
    
    //大家都在买
    var buyCont = document.getElementById('shop_main');
    var buyLink = buyCont.getElementsByTagName('a');
    var buyPic = document.getElementById('hotPic2');
    for(var i=0;i<buyLink.length;i++){
        buyLink[i].setAttribute("href",i);
        buyLink[i].onmouseover = function(){
            //alert(link[i].innerHTML);
            var flag = this.getAttribute("href");
            buyPic.setAttribute("src","images/gallerybuy"+i+".jpg");
            //alert(pic.getAttribute("src"));
            buyPic.setAttribute("alt","我是第"+flag+"张大家都在买车型图片");
        }
    }
} 
    