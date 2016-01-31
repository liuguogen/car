<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>登录后台</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.useso.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>shopadmin/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>shopadmin/lib/font-awesome/css/font-awesome.css">

    <script src="<?php echo base_url() ?>shopadmin/lib/jquery-1.11.1.min.js" type="text/javascript"></script>
    <link href="<?php echo base_url() ?>shopadmin/alert/css/alert.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>shopadmin/alert/themes/default/theme.min.css" rel="stylesheet" />
    <script src="<?php echo base_url() ?>shopadmin/alert/js/alert.min.js"></script>
    <script src="<?php echo base_url() ?>shopadmin/alert/js/common.js" type="text/javascript"></script>
    

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>shopadmin/stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>shopadmin/stylesheets/premium.css">

</head>
<body class=" theme-blue"  onkeydown="keyLogin()">

    <!-- Demo page code -->

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
function changeCode(){
    document.getElementById("code").src="<?php echo base_url() ?>shopadmin/index.php/login/getcode/rnd/"+(new Date().getTime());
}
</script>
    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <!-- <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png"> -->
  

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
   
  <!--<![endif]-->

    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <a class="" href="javascript:void(0)"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> 后台管理系统</span></a></div>

        <div class="navbar-collapse collapse" style="height: 1px;">

        </div>
      </div>
    </div>
    


        <div class="dialog">
    <div class="panel panel-default">
        <p class="panel-heading no-collapse">登录</p>
        <div class="panel-body">
            <!-- <form action="<?php echo base_url() ?>shopadmin/index.php/welcome/islogin" method="POST"> -->
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control span12" placeholder="请输入用户名">
                </div>
                <div class="form-group">
                <label>Password</label>
                    <input type="password" name="password" class="form-controlspan12 form-control" placeholder="请输入密码">
                </div>
                <div class="form-group">
                <label>VerifyCode</label>
                    <input type="password" name="text" class="form-controlspan12 form-control" placeholder="请输入验证码"><br/>
                    <span><img src="<?php echo base_url(); ?>shopadmin/index.php/login/getcode" id="code" title='看不清，换一张'  onclick="changeCode()" style="vertical-align:middle;cursor:pointer;"/></span>
                </div>
                <a href="javascript:void(0)" id="sub_button"  onclick="submit_from()" class="btn btn-primary pull-right">立即登录</a>
                <!-- <button type="submit" class="btn btn-primary pull-right">立即登录</button> -->
                <!-- <label class="remember-me"><input type="checkbox"> Remember me</label> -->
                <div class="clearfix"></div>
            <!-- </form> -->
        </div>
    </div>
    <!-- <p class="pull-right" style=""><a href="#" target="blank" style="font-size: .75em; margin-top: .25em;">Design by Portnine</a></p>
    <p><a href="reset-password.html">Forgot your password?</a></p> -->
</div>



    <script src="<?php echo base_url() ?>shopadmin/lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            
            $('.demo-cancel-click').click(function(){return false;});

            // $("#sub_button").click(function(){


            //     var username=$("input[name='username']").val();
            //     var password = $("input[name='password']").val();
            //     _mpSuccess(username);
            // });
        });

        function submit_from(){
            var username=$("input[name='username']").val();
            alert(username);
        }
        document.onkeydown=function(event){
            var e = event || window.event || arguments.callee.caller.arguments[0];
            if(e && e.keyCode==27){ // 按 Esc 
                //要做的事情
              }
            if(e && e.keyCode==113){ // 按 F2 
                 //要做的事情
               }            
             if(e && e.keyCode==13){ // enter 键
                window.document.getElementById('sub_button').click();
                 
            }
        }; 
    </script>
    
  
</body></html>
