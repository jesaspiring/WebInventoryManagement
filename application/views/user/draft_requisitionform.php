<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CPU| Faculty</title>
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
      <a href="<?php echo base_url('index.php/page/user') ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">CPU</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>CPU</b> Faculty</span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url(); ?>/assets/theme/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $this->session->userdata('username'); ?></span>
              </a>
              <ul class="dropdown-menu" style="width: 150px">

              <li><a href="<?php echo base_url('index.php/page/profile') ?>">
                    <h4><i class="glyphicon glyphicon-user"></i> Profile</h4>
                  </a></li>
                <li><a href="<?php echo base_url('index.php/login/logout') ?>">
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
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">
            <h4 class="text-center"><?php echo $this->session->userdata('department') ?></h4>
          </li><br>
          <!-- Optionally, you can add icons to the links -->
          <li><a href="<?php echo base_url('index.php/page/user') ?>"><i class="glyphicon glyphicon-home"></i><span>Home</span></a></li>
          <li class="treeview">
            <a href="#">
              <i class="glyphicon glyphicon-file"></i>
              <span>Requisition Form</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('index.php/UserRequest') ?>"><i class="fa fa-circle-o"></i>Create Request</a></li>
              <li><a href="<?php echo base_url('index.php/UserRequest/draft_request') ?>"><i class="fa fa-circle-o"></i>Draft Request</a></li>
              <li><a href="<?php echo base_url('index.php/UserRequest/my_packages') ?>"><i class="fa fa-circle-o"></i></i><span>My Packages</span></a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('index.php/UserRequest/trackView') ?>"><i class="glyphicon glyphicon-map-marker"></i><span>My Request</span></a></li>
                    <li><a href="<?php echo base_url('index.php/UserRequest/procurred_items')?>"><i class="glyphicon glyphicon-list"></i><span>Procured Items</span></a></li>
          </ul>
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!--
    <section class="content-header">
      <h1>
        <small>Welcome <?php echo $this->session->userdata('username'); ?></small>
      </h1>
    </section>-->

      <!-- Main content -->
      <section class="content container-fluid">
        <div class="box box-default">
          <div class="box-body">
            <table id="example2" class="table table-black ">
              <thead>
                <tr>
                  <th style="width: 15%" class="text-center">
                    <h4>Request ID</h4>
                  </th>
                  <th style="width: 15%" class="text-center">
                    <h4>Items</h4>
                  </th>
                  <th style="width: 15%" class="text-center">
                    <h4>Last Edit</h4>
                  </th>
                  <th style="width: 15%" class="text-center">
                    <h4></h4>
                  </th>
                </tr>
              </thead>

              <tbody>
                <?php foreach ($pendingItems as $request) :
                  ?>
                  <tr>
                    <td><?php echo $request->requestID; ?></td>
                    <td>

                      <?php
                        $subject = "";

                        foreach ($item as $items) :
                          if ($items->requestID == $request->requestID) {
                            ?>

                          <?php


                                $subject .= $items->itemName . ', ';

                                ?>

                      <?php }
                        endforeach;

                        if (strlen($subject) > 20) {
                          $subject = substr($subject, 0, 20);
                          echo $subject . '...';
                        } else {
                          echo substr($subject, 0, strlen($subject) - 2);
                        }

                        ?>

                    </td>
                    <td><?php echo $request->date_requested; ?></td>
                    <td>
                      <div class="btn-toolbar">
                        <div class="btn-group">
                          <?php echo form_open('UserRequest/edit_request'); ?>
                          <button type="submit" style="color: #ffbb33" class="btn btn-link ionicons ion-edit" data-toggle="tooltip" data-placement="top" title="Edit">
                          </button>
                          <input type="text" name="requestID" value=<?php echo $request->requestID; ?> hidden />
                          <input type="text" name="category" value=<?php echo $request->category; ?> hidden />
                          </form>
                        </div>

                        <div class="btn-group">
                          <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal<?php echo $request->requestID; ?>">
                            View Details
                          </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo $request->requestID; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <div class="modal-body">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th style="width: 7%" class="text-center">
                                        <h4>Item</h4>
                                      </th>
                                      <th style="width: 7%" class="text-center">
                                        <h4>Brand</h4>
                                      </th>
                                      <th style="width: 7%" class="text-center">
                                        <h4>Model</h4>
                                      </th>
                                      <th style="width: 15%" class="text-center">
                                        <h4>Description</h4>
                                      </th>
                                      <th style="width: 7%" class="text-center">
                                        <h4>Unit</h4>
                                      </th>
                                      <th style="width: 7%" class="text-center">
                                        <h4>Quantity</h4>
                                      </th>
                                      <th style="width: 7%" class="text-center">
                                        <h4>Attachment</h4>
                                      </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php foreach ($item as $items) :
                                        if ($items->requestID == $request->requestID) {
                                          ?>
                                        <tr>
                                          <td><?php echo $items->itemName; ?></td>
                                          <td><?php echo $items->brand; ?></td>
                                          <td></td>
                                          <td><?php echo $items->itemDescription; ?></td>
                                          <td><?php echo $items->unit; ?></td>
                                          <td><?php echo $items->quantity; ?></td>
                                          <td></td>
                                        </tr>
                                    <?php }
                                      endforeach; ?>
                                  </tbody>
                                </table>
                              </div>

                              <div class="modal-footer">
                                <button type="button" class="btn btn-success pull-right" data-dismiss="modal">OK</button>
                              </div>
                            </div>
                          </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>

          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- Default to the left -->
      <strong>Copyright &copy; 2019 <a href="#">Thesis Group</a>.</strong> All rights reserved.
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
  <!-- DataTables -->
  <script src="<?php echo base_url(); ?>/assets/theme/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/theme/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script>
    $(function() {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging': true,
        'lengthChange': true,
        'searching': true,
        'ordering': true,
        'info': true,
        'autoWidth': false
      })
    })
  </script>
  <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>