<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UAd-Compatible" content="IE=edge">
  <title>CPU | Purchasing</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- color table -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/added/table_color.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/plugins/iCheck/all.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <div class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">CPU</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>CPU</b>Purchasing</span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                        page and may cause design problems
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-red"></i> 5 new members joined
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user text-red"></i> You changed your username
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url(); ?>/assets/theme/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Jesiah Aguilar</span>
              </a>
              <ul class="dropdown-menu" style="width: 150px">
                <!-- User image -->
                <!--
                <li class="user-header">
                  <img src="<?php echo base_url(); ?>/assets/theme/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    Jesiah Aguilar - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li> -->
                <!-- Menu Footer-->
                <!--
                <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn glyphicon glyphicon-user"></a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn glyphicon glyphicon-log-out"></a>
                </div>
              </li>
              </ul> -->

                <li><a href="">
                    <h4><i class="glyphicon glyphicon-user"></i> Profile</h4>
                  </a></li>
                <li><a href="">
                    <h4><i class="glyphicon glyphicon-log-out"></i> Log out</h4>
                  </a></li>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <!--
      <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url(); ?>/assets/theme/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Jesiah Aguilar</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div> -->
        <h4 class="text-center">
          <font color="#fff"><?php echo $this->session->userdata('department') ?></font>
        </h4>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <hr>
          <li><a href="<?php echo base_url('index.php/page/purchasing') ?>"><i class="glyphicon glyphicon-home"></i><span>Home</span></a></li>
          <li class="treeview">
            <a href="#">
              <i class="glyphicon glyphicon-file"></i><span>Requisition Form</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i>Create Request</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Draft Request</a></li>
            </ul>
          </li>

          <li><a href="<?php echo base_url('index.php/approval/displayRequestPurchasing') ?>">
              <i class="glyphicon glyphicon-list-alt"></i><span> Approval</span></a>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="glyphicon glyphicon-file"></i><span>Purchase Order</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i>Create Purchase Order</a></li>
              <li><a href="<?php echo base_url('index.php/purchasingDept/pendingPuchaseOrder') ?>"><i class="fa fa-circle-o"></i>Pending Purchase Order</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Location? Purchase Order</a></li>
            </ul>
          </li>

          <li><a href="<?php echo base_url('index.php/PurchasingDept/print_canvass') ?>"><i class="glyphicon glyphicon-eye-open"></i> Canvass Form</a></li>

          <!-- <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Purchase Order</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/PurchasingDept') ?>"><i class="fa fa-circle-o"></i>Create Purchase Order</a></li>
                            <li><a href="<?php echo base_url('index.php/PurchasingDept/view_po') ?>"><i class="fa fa-circle-o"></i>Purchase Orders</a></li>
                        </ul>
                    </li> -->

          <li class="treeview">
            <a href="#">
              <i class="glyphicon glyphicon-file"></i><span>Reports</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i>Generate Report</a></li>
              <li><a href="<?php echo base_url('index.php/PurchasingDept/generateReport'); ?>"><i class="fa fa-circle-o"></i>All Reports</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Summary of Report</a></li>
            </ul>
          </li>

          <!--<li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Reports</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/PurchasingDept/generateReport'); ?>"><i class="fa fa-book"></i> <span>Accomplishment Report</span></a></li>
                        </ul>
                    </li>-->
        </ul> <!-- /.sidebar-menu -->
      </section> <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!-- <section class="content-header">
                <h1>
                    <?php echo $this->session->userdata('department') ?>
                    <small>Welcome <?php echo $this->session->userdata('username'); ?></small>
                </h1>
            </section> -->

      <!-- Main content -->
      <section class="content container-fluid">
        <div class="box box-default">
          <div class="box-body">
            <div class="row">
              <div class="col-lg-1">
              </div> <!-- /.col -->

              <div class="col-lg-6">
                <h2><b>REQUISITION FORM<b>
                      <h2>
              </div> <!-- /.col -->

              <div class="col-lg-5">
                <h4>Date<h4>
              </div> <!-- /.col -->
            </div> <!-- /.row -->

            <div class="row">
              <div class="col-lg-1">
              </div> <!-- /.col -->

              <div class="col-lg-2">
                <div class="form-group">
                  <label>
                    <input type="checkbox" class="minimal">
                    <label>
                      <h5>CASH PAYMENT TO</h5>
                    </label>
                  </label>
                </div> <!-- /.form-group-->
              </div> <!-- /.col -->

              <div class="col-lg-2">
                <div class="form-group">
                  <label>
                    <input type="checkbox" class="minimal">
                    <label>
                      <h5>CASH ADVANCE TO</h5>
                    </label>
                  </label>
                </div> <!-- /.form-group-->
              </div> <!-- /.col -->
            </div> <!-- /.row -->

            <div class="row">
              <div class="col-lg-3">
              </div> <!-- /.col -->

              <div class="col-lg-2">
                <div class="form-group">
                  <label>
                    <input type="checkbox" class="minimal">
                    <label>
                      <h5>PURCHASE FROM</h5>
                    </label>
                  </label>
                </div> <!-- /.form-group-->
              </div> <!-- /.col -->
            </div> <!-- /.row -->

            <div class="row">
              <div class="col-lg-3 ">
                <br>PLS CHECK ________________
              </div> <!-- /.col -->

              <div class="col-lg-2">
                <div class="form-group">
                  <label>
                    <input type="checkbox" class="minimal">
                    <label>
                      <h5>JOB TO BE DONE BY</h5>
                    </label>
                  </label>
                </div> <!-- /.form-group-->
              </div> <!-- /.col -->
            </div> <!-- /.row -->

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 100px" class="text-center">
                    <h4>ITEM #</h4>
                  </th>
                  <th style="width: 100px" class="text-center">
                    <h4>Quantity</h4>
                  </th>
                  <th style="width: 100px" class="text-center">
                    <h4>Unit</h4>
                  </th>
                  <th style="width: 200px" class="text-center">
                    <h4>Description</h4>
                  </th>
                  <th style="width: 100px" class="text-center">
                    <h4>Unit Price</h4>
                  </th>
                  <th style="width: 150px" class="text-center">
                    <h4>Amount</h4>
                  </th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>

            <div class="row">
              <!-- accepted payments column -->
              <div class="col-lg-2 col-xs-4">
                <h4>
                  Acct. No.:______
                </h4>
              </div>
              <!-- /.col -->
              <div class="col-lg-5 col-xs-6">
                <h4>Acct. Name.:________________________________</h4>
              </div>
              <!-- /.col -->
              <div class="col-lg-5 col-xs-10">
                  <h4>Requested by:_______________________________ </h4>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
              <div class="col-lg-7 col-xs-12">
                <h4>Funds Available: _______________________________________________</h4>
              </div>
              <!-- /.col -->
              <div class="col-lg-5 col-xs-12">
                <h4>Recommending Approval:_____________________</h4>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class = "row">
              <div class = "col-lg-2"></div>
                <div class = "col-lg-4">
                <small class = "text-center"> Vice President for Finance and Administration</small>
              </div>
              <div class = "col-lg-4"></div>
              <div class = "col-lg-2">
              <small class="text-center"> Unit Head</small>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-7 col-xs-12">
                <h4>Approved: ____________________________________________________</h4>
                  <p class="text-center">President</p>
              </div>
              <!-- /.col -->
              <div class="col-lg-5 col-xs-12">
                <h4>Purchasing Officer:_________________________</h4>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <button type="button" class="btn btn-success pull-right"><i class="glyphicon glyphicon-save"></i>
              Save Changes</button>

          </div> <!-- /.box-body-->

        </div> <!-- /.box box-default-->
      </section> <!-- /.content -->
    </div> <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- Default to the left -->
      <strong>Copyright &copy; 2016 <a href="#">Thesis Group</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">

    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->

  <!-- jQuery 3 -->
  <script src="<?php echo base_url(); ?>/assets/theme/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url(); ?>/assets/theme/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url(); ?>/assets/theme/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="<?php echo base_url(); ?>/assets/theme/bower_components/raphael/raphael.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/theme/bower_components/morris.js/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url(); ?>/assets/theme/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="<?php echo base_url(); ?>/assets/theme/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/theme/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo base_url(); ?>/assets/theme/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?php echo base_url(); ?>/assets/theme/bower_components/moment/min/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/theme/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="<?php echo base_url(); ?>/assets/theme/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?php echo base_url(); ?>/assets/theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="<?php echo base_url(); ?>/assets/theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url(); ?>/assets/theme/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>/assets/theme/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url(); ?>/assets/theme/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url(); ?>/assets/theme/dist/js/demo.js"></script>
  <!-- iCheck 1.0.1 -->
  <script src="<?php echo base_url(); ?>/assets/theme/plugins/iCheck/icheck.min.js"></script>
  <script>
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    })
  </script>

  <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>