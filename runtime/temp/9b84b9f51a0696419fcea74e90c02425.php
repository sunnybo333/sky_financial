<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"D:\phpStudy\WWW\sky_sys2.0\public/../application/sky\view\login\index.html";i:1492929417;s:43:"../application/sky/view/login/js/index.html";i:1492929296;}*/ ?>
﻿<!DOCTYPE html>
<!--
Beyond Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head-->
<head>
    <meta charset="utf-8" />
    <title>Login Page</title>

    <meta name="description" content="login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="__PUBLIC__/static/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="__CSS__/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="__CSS__/font-awesome.min.css" rel="stylesheet" />

    <!--Fonts-->
    <!-- <link href="http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css"> -->

    <!--Beyond styles-->
    <link id="beyond-link" href="__CSS__/beyond.min.css" rel="stylesheet" />
    <link href="__CSS__/demo.min.css" rel="stylesheet" />
    <link href="__CSS__/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <!-- <script src="__JS__/skins.min.js"></script> -->
</head>
<!--Head Ends-->
<!--Body-->
<body onkeydown="keyLogin();">
    <div class="login-container animated fadeInDown">
        <div class="loginbox bg-white">
            <div class="loginbox-title">SIGN IN</div>
            <form method="post" id="form_login" name="form_login" action="<?php echo url('login/login'); ?>">
                <div class="loginbox-textbox">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Usernaem" />
                </div>
                <div class="loginbox-textbox">
                    <input type="text" id="password" name="password" class="form-control" placeholder="Password" />
                </div>
                <div class="loginbox-submit">
                    <input type="button" class="btn btn-primary btn-block" value="Login" onclick="login()">
                </div>
            </form>
        </div>
    </div>

    <!--Basic Scripts-->
    <script src="__JS__/jquery-2.0.3.min.js"></script>
    <script src="__JS__/bootstrap.min.js"></script>

    <!--Beyond Scripts-->
    <script src="__JS__/beyond.js"></script>

    <script type="text/javascript">
	function login() {
		if (check_form()) {
			$("#form_login").submit();
		}

	}
	function check_form() {
		if ($('#username').val()!=''&&$('#password').val()!='') {
			return true;
		} else {
			return false;
		}
		
	}
	function keyLogin() {
		if (event.keyCode == 13) {
			if (check_form("form_login")) {
				$("#form_login").submit();
				return false;
			}
		}
	}
	$(document).ready(function() {
		
	});
</script>
</body>
<!--Body Ends-->
</html>
