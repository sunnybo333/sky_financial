<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:105:"/Applications/XAMPP/xamppfiles/htdocs/sky_financial/public/../application/sky/view/accountconf/index.html";i:1493625675;s:101:"/Applications/XAMPP/xamppfiles/htdocs/sky_financial/public/../application/sky/view/layout/layout.html";i:1493648377;s:49:"../application/sky/view/accountconf/js/index.html";i:1493626486;}*/ ?>
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
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <h5 class="row-title">
            <a name="show_add_modal" href="javascript:void(0);" class="btn btn-labeled btn-palegreen" onclick="show_add_modal(0)"><i class="btn-label fa fa-plus"></i>新增一级分类</a></h5>
            <div class="dd shadowed">
                <ol id="tree_0" class="dd-list">
                    
                </ol>

            </div>
        </div>
    </div>
</div>
<!-- /Page Body -->
<!--add Modal Templates-->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">添加分类</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="control-label">分类名称：</label>
            <input type="text" class="form-control" id="account">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button id="sub_add" type="button" class="btn btn-primary" onclick="add()">提交</button>
      </div>
    </div>
  </div>
</div>
<!--end add Modal Templates-->
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
<!--End Small Modal Templates-->
<!-- del modal -->
<div id="delModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">提示框</h4>
          </div>
          <div class="modal-body">
            <p>确定要删除吗？</p>
          </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
            <button type="button" class="btn btn-primary" onclick="del()">确定</button>
        </div>
    </div>
  </div>
</div>
<!--end del modal -->
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
	var temp_id=0;
    $(document).ready(function() {
		tree(eval(<?php echo $list_node; ?>),0,0);
		//console.log(eval(<?php echo $list_node; ?>));
		jQuery(function ($) {
	        $('.dd').nestable();
	        $('.dd-handle a').on('mousedown', function (e) {
	            e.stopPropagation();
	        });
	    });
	});
	function tree(arr,pid=0,level=0) {
		for (var i = 0; i < arr.length; i++) {
			if (arr[i]['pid']==pid) {
				//console.log(arr[i]['pid']+'$'+pid);
				var str='';
				if(arr[i]['top']==1){
					str='<li top="'+arr[i]['top']+'" class="dd-item bordered-inverse"><div class="dd-handle"><div class=" col-xs-5" style="padding:0px">'+arr[i]['account_name']+'</div><div class=" col-xs-6 pull-right" style="text-align:right;padding:0px"><a name="del" type="button" class="btn btn-danger" style="padding:2px" onclick="show_del_modal('+arr[i]['id']+')">DEL</a><a name="add" type="button" class="btn btn-info" style="padding:2px;margin-left:3px" onclick="show_add_modal('+arr[i]['id']+')">ADD</a></div></div><ol id="tree_'+arr[i]['id']+'" class="dd-list"></ol></li>';
				}
				else{
					str='<li top="'+arr[i]['top']+'" class="dd-item bordered-blue"><div class="dd-handle"><div class=" col-xs-5" style="padding:0px">'+arr[i]['account_name']+'</div><div class=" col-xs-6 pull-right" style="text-align:right;padding:0px"><a name="del" type="button" class="btn btn-danger" style="padding:2px" onclick="show_del_modal('+arr[i]['id']+')">DEL</a><a name="add" type="button" class="btn btn-info" style="padding:2px;margin-left:3px" onclick="show_add_modal('+arr[i]['id']+')">ADD</a></div></div></li>';
				}

				$("#tree_"+arr[i]['pid']).append(str);
				tree(arr,arr[i]['id'],level+1);
			}
		}
	}
	function add() {
		if ($('#account').val()!=''&&$('#account').val().length<20) {
        	$.get("<?php echo url('add'); ?>", {pid:temp_id,account_name:$('#account').val()}, function (data) {
        		console.log(data);
        		if (data==1) {
        			$('#modal_text').html('提交成功！');
        			$('#modal_small').modal('show');
        			window.location.href="<?php echo url('index'); ?>";
        		} else {
        			$('#modal_text').html('提交失败/(ㄒoㄒ)/~~');
        			$('#modal_small').modal('show');
        		}
        	});
        } else {
    		$('#modal_text').html('分类名称不合规！');
            $('#modal_small').modal('show');
    	}
	}
	function del() {
		$('#delModal').modal('hide');
		$.get("<?php echo url('del'); ?>", {id:temp_id}, function (data) {
    		console.log(data);
    		if (data==1) {
    			$('#modal_text').html('删除成功！');
    			$('#modal_small').modal('show');
    			window.location.href="<?php echo url('index'); ?>";
    		} 
    		else if (data==3) {
    			$('#modal_text').html('无法删除，该科目下还有未删除的二级科目！');
    			$('#modal_small').modal('show');
    		} 
    		else {
    			$('#modal_text').html('删除失败/(ㄒoㄒ)/~~');
    			$('#modal_small').modal('show');
    		}
    	});
	}
	function show_add_modal(id=0) {
		temp_id=id;
		console.log(temp_id);
		$('#addModal').modal('show');
	}
	function show_del_modal(id=0) {
		temp_id=id;
		console.log(temp_id);
		$('#delModal').modal('show');
	}
</script>
</body>
<!--  /Body -->
</html>
