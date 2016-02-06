<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>慧车后台管理系统</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>shopadmin/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>shopadmin/lib/font-awesome/css/font-awesome.css">
    <link href="<?php echo base_url(); ?>shopadmin/css/uploadify.css" type="text/css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>shopadmin/lib/jquery-1.11.1.min.js" type="text/javascript"></script>

        <script src="<?php echo base_url(); ?>shopadmin/lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>shopadmin/js/jquery.uploadify.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $(".knob").knob();
        });
    </script>


    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>shopadmin/stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>shopadmin/stylesheets/premium.css">

</head>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->

  

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
   
  <!--<![endif]-->

    
<body class=" theme-blue">
   <script type="text/javascript">
        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                $('body').removeClass(function (index, css) {
                    return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }

            $('[data-popover="true"]').popover({html: true});
            
        });
    </script>
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style>

    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>
    <?php echo $this->load->view('header') ?>
    <ul class="breadcrumb">
            <li><a href="<?php echo base_url() ?>shopadmin/index.php/lunbo/index">轮播图</a> </li>
            <li class="active"><a href="<?php echo base_url() ?>shopadmin/index.php/welcome/index">返回首页</a></li>
        </ul>

        </div>
        <div class="main-content">
            




    <div class="panel panel-default">
        <a href="#page-stats" class="panel-heading" data-toggle="collapse">轮播图</a>
        <form method="POST" action="<?php echo base_url() ?>shopadmin/index.php/lunbo/addimg">
        <div id="page-stats" class="panel-collapse panel-body collapse in">
<input type="submit" value="提交"  onclick="return check_data();" class="panel-heading" style="width:80px;height:30px;border:none;background:#238623;color:white;font-weight:blod;font-family:'微软雅黑';border-radius:5px;margin-buttom:10px;margin:0 auto;"/>
                    <input type="hidden" value="<?php echo $thumb['id'] ?>" name="id" />
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="knob-container">
                                <!-- <input class="knob" data-width="200" data-min="0" data-max="3000" data-displayPrevious="true" value="2500" data-fgColor="#92A3C2" data-readOnly=true;> -->
                                <input id="one_imgs" name="one_imgs" type="file" multiple="true">
                                <h3 class="text-muted text-center">第一张轮播图</h3>
                                <input type="hidden" name="one_img" value="<?php echo $thumb['one_img'] ?>">
                                <div id="one" style="margin-bottom:10px;">
                                  <img src="<?php if($thumb['one_img']){ echo $thumb['one_img'] ;}else{ echo base_url()."/assets/images/default.jpg" ;} ?>"  style="height: 120px;width: 120px;margin-right:5px;margin-left:130px;"/>
                                 </div>
                                 <div id="one" style="margin-left:50px;">
                                  URL地址：<input id="one_url" name="one_url" type="text" value="<?php echo $thumb['one_url'] ?>">
                                 </div>
                                 
                            </div>
                        </div>
                       <div class="col-md-3 col-sm-6">
                            <div class="knob-container">
                                <!-- <input class="knob" data-width="200" data-min="0" data-max="4500" data-displayPrevious="true" value="3299" data-fgColor="#92A3C2" data-readOnly=true;> -->
                               <input id="two_imgs" name="two_imgs" type="file" multiple="true">
                                <h3 class="text-muted text-center">第二张轮播图</h3>
                                <input type="hidden" name="two_img" value="<?php echo $thumb['two_img'] ?>">
                                <div id="two" style="margin-bottom:10px;">
                                  <img src="<?php if($thumb['two_img']){ echo $thumb['two_img'] ;}else{ echo base_url()."/assets/images/default.jpg" ;} ?>"  style="height: 120px;width: 120px;margin-right:5px;margin-left:130px;"/>
                                 </div>
                                 <div id="one" style="margin-left:50px;">
                                  URL地址：<input id="two_url" name="two_url" type="text" value="<?php echo $thumb['two_url'] ?>" />
                                 </div>
                            </div>
                        </div>
                          <div class="col-md-3 col-sm-6">
                            <div class="knob-container">
                                <!-- <input class="knob" data-width="200" data-min="0" data-max="2700" data-displayPrevious="true" value="1840" data-fgColor="#92A3C2" data-readOnly=true;> -->
                                
                                <input id="three_imgs" name="three_imgs" type="file" multiple="true">
                                <h3 class="text-muted text-center">左侧轮播图</h3>
                                <input type="hidden" name="three_img" value="<?php echo $thumb['three_img'] ?>">
                                <div id="three" style="margin-bottom:10px;">
                                  <img src="<?php if($thumb['three_img']){ echo $thumb['three_img'] ;}else{ echo base_url()."/assets/images/default.jpg" ;} ?>"  style="height: 120px;width: 120px;margin-right:5px;margin-left:130px;"/>
                                 </div>
                                 <div id="three" style="margin-left:50px;">
                                  URL地址：<input id="three_url" name="three_url" type="text" value="<?php echo $thumb['three_url'] ?>" />
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="knob-container">
                                <!-- <input class="knob" data-width="200" data-min="0" data-max="15000" data-displayPrevious="true" value="10067" data-fgColor="#92A3C2" data-readOnly=true;> -->
                                <input id="four_imgs" name="three_imgs" type="file" multiple="true">
                                <h3 class="text-muted text-center">右侧轮播图</h3>
                                <input type="hidden" name="four_img" value="<?php echo $thumb['four_img'] ?>">
                                 <div id="four" style="margin-bottom:10px;">
                                  <img src="<?php if($thumb['four_img']){ echo $thumb['four_img'] ;}else{ echo base_url()."/assets/images/default.jpg" ;} ?>"  style="height: 120px;width: 120px;margin-right:5px;margin-left:130px;"/>
                                 </div>
                                 <div id="four" style="margin-left:50px;">
                                  URL地址：<input id="four_url" name="three_url" type="text" value="<?php echo $thumb['four_url'] ?>" />
                                 </div>
                            </div>
                        </div>
                    </div>
        </div>
        </form>
    </div>

            <!-- <footer>
                <hr>

                
                <p class="pull-right">Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
                <p>© 2014 <a href="#" target="_blank">Portnine</a></p>
            </footer> -->
        </div>
    </div>


    <script src="<?php echo base_url(); ?>shopadmin/lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  <script type="text/javascript">
  <?php $timestamp = time();?>
  $(function(){
   
    $('#one_imgs').uploadify({
        'buttonText' : '选择文件',
         'fileSizeLimit' : '500KB',
        'fileTypeDesc' : '选择图片',
         'fileTypeExts' : '*.gif; *.jpg;*.jpeg; *.png',
         'fileObjName' : 'fileField',
         'method'   : 'post',
        'formData'     : {
          'timestamp' : '<?php echo $timestamp;?>',
          'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
        },
        'swf'      : '<?php  echo base_url(); ?>shopadmin/swf/uploadify.swf',
        'uploader' : "<?php echo base_url(); ?>shopadmin/index.php/lunbo/upload",
        'onUploadSuccess':function(file,data,response){
          if(response && data!='error'){
             //if($("[name='thumb']").val()==''){
            $("[name='one_img']").val(data);
            
            
            //$('#queue').append('<a><img src="'+data+'" style="height: 120px;width: 120px;margin-right:5px;margin-left:72px;" /></a>');
            $("#one > img").attr('src',data);
          //}
          }
        }
      });
$('#two_imgs').uploadify({
        'buttonText' : '选择文件',
         'fileSizeLimit' : '500KB',
        'fileTypeDesc' : '选择图片',
         'fileTypeExts' : '*.gif; *.jpg;*.jpeg; *.png',
         'fileObjName' : 'fileField',
         'method'   : 'post',
        'formData'     : {
          'timestamp' : '<?php echo $timestamp;?>',
          'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
        },
        'swf'      : '<?php  echo base_url(); ?>shopadmin/swf/uploadify.swf',
        'uploader' : "<?php echo base_url(); ?>shopadmin/index.php/lunbo/upload",
        'onUploadSuccess':function(file,data,response){
          if(response && data!='error'){
             //if($("[name='thumb']").val()==''){
            $("[name='two_img']").val(data);
           
            //$('#queue').append('<a><img src="'+data+'" style="height: 120px;width: 120px;margin-right:5px;margin-left:72px;" /></a>');
            $("#two > img").attr('src',data);
          //}
          }
        }
      });
$('#three_imgs').uploadify({
        'buttonText' : '选择文件',
         'fileSizeLimit' : '500KB',
        'fileTypeDesc' : '选择图片',
         'fileTypeExts' : '*.gif; *.jpg;*.jpeg; *.png',
         'fileObjName' : 'fileField',
         'method'   : 'post',
        'formData'     : {
          'timestamp' : '<?php echo $timestamp;?>',
          'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
        },
        'swf'      : '<?php  echo base_url(); ?>shopadmin/swf/uploadify.swf',
        'uploader' : "<?php echo base_url(); ?>shopadmin/index.php/lunbo/upload",
        'onUploadSuccess':function(file,data,response){
          if(response && data!='error'){
             //if($("[name='thumb']").val()==''){
            $("[name='three_img']").val(data);
            
            //$('#queue').append('<a><img src="'+data+'" style="height: 120px;width: 120px;margin-right:5px;margin-left:72px;" /></a>');
            $("#three > img").attr('src',data);
          //}
          }
        }
      });
$('#four_imgs').uploadify({
        'buttonText' : '选择文件',
         'fileSizeLimit' : '500KB',
        'fileTypeDesc' : '选择图片',
         'fileTypeExts' : '*.gif; *.jpg;*.jpeg; *.png',
         'fileObjName' : 'fileField',
         'method'   : 'post',
        'formData'     : {
          'timestamp' : '<?php echo $timestamp;?>',
          'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
        },
        'swf'      : '<?php  echo base_url(); ?>shopadmin/swf/uploadify.swf',
        'uploader' : "<?php echo base_url(); ?>shopadmin/index.php/lunbo/upload",
        'onUploadSuccess':function(file,data,response){
          if(response && data!='error'){
             //if($("[name='thumb']").val()==''){
            $("[name='four_img']").val(data);
            
            
            //$('#queue').append('<a><img src="'+data+'" style="height: 120px;width: 120px;margin-right:5px;margin-left:72px;" /></a>');
            $("#four > img").attr('src',data);
          //}
          }
        }
      });

  })
  </script>
</body></html>
