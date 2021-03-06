<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:98:"/Applications/XAMPP/xamppfiles/htdocs/sky_financial/public/../application/sky/view/home/index.html";i:1493740719;s:101:"/Applications/XAMPP/xamppfiles/htdocs/sky_financial/public/../application/sky/view/layout/layout.html";i:1493648377;s:42:"../application/sky/view/home/js/index.html";i:1493742036;}*/ ?>
﻿<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>蓝天评估项目管理系统</title>

    <meta name="description" content="Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="__PUBLIC__/static/img/favicon.png" type="image/x-icon">


    <!--Basic Styles-->
    <link href="__CSS__/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="__CSS__/font-awesome.min.css" rel="stylesheet" />
    <link href="__CSS__/weather-icons.min.css" rel="stylesheet" />

    <!--Fonts-->
    <!-- <link href="http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">

    --><!--Beyond styles-->
    <link id="beyond-link" href="__CSS__/beyond.min.css" rel="stylesheet" type="text/css" />
    <link href="__CSS__/demo.min.css" rel="stylesheet" />
    <link href="__CSS__/typicons.min.css" rel="stylesheet" />
    <link href="__CSS__/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />
    <!--Page Related styles-->
    <link href="__CSS__/dataTables.bootstrap.css" rel="stylesheet" />
    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="__JS__/skins.min.js"></script>
</head>
<!-- /Head -->
<!-- Body -->
<body>
    <!-- Loading Container -->
    <div class="loading-container">
        <div class="loading-progress">
            <div class="rotator">
                <div class="rotator">
                    <div class="rotator colored">
                        <div class="rotator">
                            <div class="rotator colored">
                                <div class="rotator colored"></div>
                                <div class="rotator"></div>
                            </div>
                            <div class="rotator colored"></div>
                        </div>
                        <div class="rotator"></div>
                    </div>
                    <div class="rotator"></div>
                </div>
                <div class="rotator"></div>
            </div>
            <div class="rotator"></div>
        </div>
    </div>
    <!--  /Loading Container -->
    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <img src="__PUBLIC__/static/img/logo.png" alt="" />
                        </small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->

                <!-- Sidebar Collapse -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
                <!-- /Sidebar Collapse -->
                <!-- Account Area and Settings -->
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                            <li>
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                    <div class="avatar" title="View your public profile">
                                        <img src="__PUBLIC__/static/img/avatars/adam-jansen.jpg">
                                    </div>
                                    <section>
                                        <h2><span class="profile"><span><?php echo \think\Session::get('username'); ?></span></span></h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a><?php echo \think\Session::get('username'); ?></a></li>
                                    <li class="email"><a><?php echo \think\Session::get('last_login_date'); ?></a></li>
                                    <li class="dropdown-footer">
                                        <a href=<?php echo url('login/logout'); ?>>
                                            退出登录
                                        </a>
                                    </li>
                                </ul>
                                <!--/Login Area Dropdown-->
                            </li>
                            <!-- /Account Area -->
                            <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                            <!-- Settings -->
                        </ul>
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>
    <!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input type="text" class="searchinput" />
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li class="active open">
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-home"></i>
                            <span class="menu-text"> 主页面板 </span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li id="mxb">
                                <a href="<?php echo url('home/index'); ?>">
                                    <span class="menu-text">明细表</span>
                                </a>
                            </li>
                            <li id="hzb">
                                <a href="<?php echo url('home/total'); ?>">
                                    <span class="menu-text">汇总表</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Databoxes--> 
                    <!--Dashboard-->
                    <li id="kmgl">
                        <a href="<?php echo url('accountconf/index'); ?>">
                            <i class="menu-icon glyphicon glyphicon-cog"></i>
                            <span class="menu-text"> 科目管理 </span>
                        </a>
                    </li>
                    <!--Databoxes-->
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#">主页面板</a>
                        </li>
                        <?php foreach($node as $vo): ?>
                            <li class="active"><?php echo $vo; ?></li>
                        <?php endforeach; ?>
                        
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            <?php echo $header; ?>
                        </h1>
                    </div>
                    <!--Header Buttons-->
                    <div class="header-buttons">
                        <a class="sidebar-toggler" href="#">
                            <i class="fa fa-arrows-h"></i>
                        </a>
                        <a class="refresh" id="refresh-toggler" href="">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </a>
                        <a class="fullscreen" id="fullscreen-toggler" href="#">
                            <i class="glyphicon glyphicon-fullscreen"></i>
                        </a>
                    </div>
                    <!--Header Buttons End-->
                </div>
                <!-- /Page Header -->
                <!-- Page Body -->
                ﻿
<!-- Page Body -->
<div class="page-body">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="widget">
                <div class="widget-header ">
                    <span class="widget-caption">科目金额明细表</span>
                    <div class="widget-buttons">
                        <a href="#" data-toggle="maximize">
                            <i class="fa fa-expand"></i>
                        </a>
                        <a href="#" data-toggle="collapse">
                            <i class="fa fa-minus"></i>
                        </a>
                        <a href="#" data-toggle="dispose">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="widget-body">
                    <div class="col-xs-12" style="padding: 0px">
                        <div class="table-toolbar  col-xs-3 col-md-3">
                            <div class="input-group">
                              <a id="select_account" href="javascript:void(0);" class="btn btn-default" onclick="hide_tree()">
                                选择显示科目
                            </a>
                            </div>
                        </div>
                        <div class="table-toolbar  col-xs-5 col-md-3">
                            <div class="input-group">
                              <input type="text" class="form-control" id="being_date" placeholder="2017-01-01">
                              
                              <div class="input-group-addon">至</div>
                              
                              <input type="text" class="form-control" id="end_date" placeholder="2017-01-31">
                              
                            </div>
                        </div>
                        <div class="table-toolbar  col-xs-3  col-md-1 pull-right" style="text-align: right">
                            <a id="search" href="javascript:void(0);" class="btn btn-info" style="margin-top: 2px">
                            查询</a>
                        </div>
                        <div class="table-toolbar  col-xs-6  col-md-1 pull-right" style="text-align: right">
                            <a id="editabledatatable_new" href="javascript:void(0);" class="btn btn-default purple" style="margin-top: 2px"  onclick="show_add_modal(0)">
                                <i class="fa fa-plus"></i>新增
                            </a>
                        </div>  
                    </div>
                    <div class="col-xs-12" style="padding: 0px">
                        <div class="table-toolbar col-xs-12 col-md-6">
                            <div id="tree" class="dd shadowed hide">
                                <ol id="tree_0" class="dd-list">
                                    
                                </ol>

                            </div>
                        </div>
                    </div>
                    <div style="width:100%; height:400px;overflow:auto;border:1px solid #d6d6d6">
                        <div  style="width:100%; height:400px">
                            <table class="table table-striped table-hover table-bordered" id="editabledatatable">
                                <thead>
                                    <tr role="row">
                                        <th>
                                            科目名称
                                        </th>
                                        <th>
                                            录入日期
                                        </th>
                                        <th>
                                            金额
                                        </th>
                                        <th>
                                            操作
                                        </th>
                                    </tr>
                                </thead>

                                <tbody id="table_add">
                                    <tr>
                                        <td>基本工资</td>
                                        <td>2017-01</td>
                                        <td>345.78</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                            <a href="#" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Page Body -->
<!--Small Modal Templates-->
<div id="modal_small" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="mySmallModalLabel">提示框</h4>
            </div>
            <div class="modal-body">
                <label id="modal_text"></label>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!--add Modal Templates-->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">添加</h4>
      </div>
      <div class="modal-body col-xs-12 well">
            <div class="table-toolbar col-xs-3 col-md-3" style="margin-right: 2px">
                <a id="select_modal_account" href="javascript:void(0);" class="btn btn-default" onclick="hide_modal_tree()">选择添加科目</a>
            </div>
            <div class="table-toolbar col-xs-3 col-md-3" style="margin-right: 2px">
                <div class="input-group" style="">
                    <div class="input-group-addon">¥</div>
                  <input type="text" class="form-control" id="add_money" placeholder="0.00">
                </div>
            </div>
            <div class="table-toolbar col-xs-3 col-md-3" style="margin-right: 2px">
                <div class="input-group">
                  <input type="text" class="form-control" id="add_date" placeholder="日期">
                </div>
            </div>
            <div class="table-toolbar col-xs-12 col-md-12">
                <div id="modal_tree" class="dd shadowed hide">
                    <ol id="modal_tree_0" class="dd-list">
                        
                    </ol>

                </div>
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button id="sub_add" type="button" class="btn btn-primary" onclick="add()">提交</button>
      </div>
    </div>
  </div>
</div>    
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>

    <!--Basic Scripts-->
    <script src="__JS__/jquery-2.0.3.min.js"></script>
    <script src="__JS__/bootstrap.min.js"></script>

    <!--Beyond Scripts-->
    <script src="__JS__/beyond.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){ 
            $(<?php echo $active_node; ?>).addClass('active');
        });
    </script>
    <!--Page tree Scripts-->
    <script src="__JS__/nestable/jquery.nestable.min.js"></script>
    <!--Page modal Scripts-->
    <script src="__JS__/bootbox/bootbox.js"></script>
    <!--Page table Scripts-->
    <script src="__JS__/datatable/jquery.dataTables.min.js"></script>
    <script src="__JS__/datatable/ZeroClipboard.js"></script>
    <script src="__JS__/datatable/dataTables.tableTools.min.js"></script>
    <script src="__JS__/datatable/dataTables.bootstrap.min.js"></script>
    <script src="__JS__/datatable/datatables-init.js"></script>
    <!--Bootstrap Date Range Picker-->
    <script src="__JS__/datetime/moment.js"></script>
    <script src="__JS__/datetime/daterangepicker.js"></script>
    <script>
        $('#reservation').daterangepicker();
    </script>
    
    <script type="text/javascript">
	var select_pid=0;
	var select_modal_id=0;
	var tree_hide=1;
	var modal_tree_hide=1;
	var add_account_name="";
	$(document).ready(function() {
		tree(eval(<?php echo $list_node; ?>),0,0);
		//console.log(eval(<?php echo $list_node; ?>));
		jQuery(function ($) {
	        $('.dd').nestable();
	        $('.dd-handle a').on('mousedown', function (e) {
	            e.stopPropagation();
	        });
	    });
	    $('#add_date').val('<?php echo $now_date; ?>');	
	});
	function tree(arr,pid=0,level=0) {
		for (var i = 0; i < arr.length; i++) {
			if (arr[i]['pid']==pid) {
				//console.log(arr[i]['pid']+'$'+pid);
				var str='';var modal_str='';
				if(arr[i]['top']==1){
					str='<li top="'+arr[i]['top']+'" class="dd-item bordered-inverse"><div class="dd-handle"><div name="'+arr[i]['id']+'" class=" col-xs-5" style="padding:0px">'+arr[i]['account_name']+'</div><div class=" col-xs-6 pull-right" style="text-align:right;padding:0px"><a name="add" type="button" class="btn btn-info" style="padding:2px;margin-left:3px" onclick="select_tree('+arr[i]['id']+')">选择</a></div></div><ol id="tree_'+arr[i]['id']+'" class="dd-list"></ol></li>';
					modal_str='<li top="'+arr[i]['top']+'" class="dd-item bordered-inverse"><div class="dd-handle"><div name="modal'+arr[i]['id']+'" class=" col-xs-5" style="padding:0px">'+arr[i]['account_name']+'</div><div class=" col-xs-6 pull-right" style="text-align:right;padding:0px"></div></div><ol id="modal_tree_'+arr[i]['id']+'" class="dd-list"></ol></li>';
				}
				else{
					str='<li top="'+arr[i]['top']+'" class="dd-item bordered-blue"><div class="dd-handle"><div name="'+arr[i]['id']+'" class=" col-xs-5" style="padding:0px">'+arr[i]['account_name']+'</div><div class=" col-xs-6 pull-right" style="text-align:right;padding:0px"><a name="add" type="button" class="btn btn-info" style="padding:2px;margin-left:3px" onclick="select_tree('+arr[i]['id']+')">选择</a></div></div></li>';
					modal_str='<li top="'+arr[i]['top']+'" class="dd-item bordered-blue"><div class="dd-handle"><div name="modal'+arr[i]['id']+'" class=" col-xs-5" style="padding:0px">'+arr[i]['account_name']+'</div><div class=" col-xs-6 pull-right" style="text-align:right;padding:0px"><a name="add" type="button" class="btn btn-info" style="padding:2px;margin-left:3px" onclick="select_modal_tree('+arr[i]['id']+')">选择</a></div></div></li>';
				}

				$("#tree_"+arr[i]['pid']).append(str);
				$("#modal_tree_"+arr[i]['pid']).append(modal_str);
				tree(arr,arr[i]['id'],level+1);
			}
		}
	}
	function select_tree(id) {
		select_pid=id;
		$('#tree').addClass('hide');
		$('#select_account').html($('div[name="'+select_pid+'"]').html());
		tree_hide=1;
		console.log(select_pid);
	}
	function select_modal_tree(id) {
		select_modal_id=id;
		$('#modal_tree').addClass('hide');
		$('#select_modal_account').html($('div[name="modal'+select_modal_id+'"]').html());
		add_account_name=$('div[name="modal'+select_modal_id+'"]').html();
		
		tree_hide=1;
		console.log(select_modal_id);
	}
	function hide_tree() {
		if (tree_hide==0) {
			$('#tree').addClass('hide');
			tree_hide=1;
		} else {
			$('#tree').removeClass('hide');
			tree_hide=0;
		}
	}
	function hide_modal_tree() {
		if (modal_tree_hide==0) {
			$('#modal_tree').addClass('hide');
			modal_tree_hide=1;
		} else {
			$('#modal_tree').removeClass('hide');
			modal_tree_hide=0;
		}
	}
	function show_add_modal(id=0) {
		$('#addModal').modal('show');
	}
	function add() {
		var ok=1;
		if (add_account_name=='') {ok='科目名不能为空';}
		if ($('#add_money').val()=='') {ok='金额不能为空';}
		if ($('#add_date').val()=='') {ok='日期不能为空';}
		if (isNaN($('#add_money').val())) {ok='金额格式错误';}
		if (!RQcheck($('#add_date').val())) {ok='日期格式错误';}
		$('#addModal').modal('hide');
		if (ok==1) {
			$.get("<?php echo url('add'); ?>", {account_name:add_account_name,account_id:select_modal_id,money:$('#add_money').val(),date:$('#add_date').val()}, function (data) {
				console.log(data);
				if (data>=1) {
					$('#table_add').prepend('<tr><td>'+add_account_name+'</td><td>'+$('#add_date').val()+'</td><td>'+$('#add_money').val()+'</td><td><a href="#" class="btn btn-info btn-xs edit" style="margin-right: 3px;" onclick="edit('+data+')"><i class="fa fa-edit"></i> Edit</a><a href="#" class="btn btn-danger btn-xs delete" onclick="del('+data+')"><i class="fa fa-trash-o"></i> Delete</a></td></tr>');
				} else {
					$('#modal_text').html('提交失败/(ㄒoㄒ)/~~');
        			$('#modal_small').modal('show');
				}
			})
		}else{
			$('#modal_text').html('提交失败/(ㄒoㄒ)/~~'+ok);
        	$('#modal_small').modal('show');
		}
	}
	function RQcheck(RQ) {
        var date = RQ;
        var result = date.match(/^(\d{1,4})(-|\/)(\d{1,2})\2(\d{1,2})$/);

        if (result == null)
            return false;
        var d = new Date(result[1], result[3] - 1, result[4]);
        return (d.getFullYear() == result[1] && (d.getMonth() + 1) == result[3] && d.getDate() == result[4]);

    }
</script>
</body>
<!--  /Body -->
</html>
