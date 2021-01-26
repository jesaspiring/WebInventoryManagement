<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        <div class="main-header">
            <!-- Logo -->
            <a href="<?php echo base_url('index.php/page/purchasing') ?>" class="logo">
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
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url(); ?>/assets/theme/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $this->session->userdata('username');?></span>
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
                    <li><a href="<?php echo base_url('index.php/page/purchasing') ?>"><i class="glyphicon glyphicon-home"></i><span>Home</span></a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-list"></i><span>Request</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/PurchasingDept/create_request') ?>"><i class="fa fa-circle-o"></i>Create Request</a></li>
                            <li><a href="<?php echo base_url('index.php/PurchasingDept/draft_request') ?>"><i class="fa fa-circle-o"></i>Draft Request</a></li>
                            <li><a href="<?php echo base_url('index.php/approval/displayRequestPurchasing') ?>"><i class="fa fa-circle-o"></i>Request List</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('index.php/PurchasingDept/view_po') ?>"><i class="glyphicon glyphicon-list-alt"></i><span> Purchase Order<span></a></li>
                    <li><a href="<?php echo base_url('index.php/PurchasingDept/generateReport') ?>"><i class="ionicons ion-android-done-all"></i><span>Accomplishment Report</span></a></li>

                    <!--<li class="treeview">
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
                    </li>-->
                    <li class="treeview">
                        <a href="#">
                            <i class="ionicons ion-ios-person"></i><span> Supplier Profiling</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/PurchasingDept/supplier_profiling'); ?>"><i class="fa fa-circle-o"></i>Create Supplier</a></li>
                            <li><a href="<?php echo base_url('index.php/PurchasingDept/view_supplier'); ?>"><i class="fa fa-circle-o"></i>View Supplier</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('index.php/PurchasingDept/archive') ?>"><i class="ionicons ion-archive"></i><span> Archive</span></a></li>

                </ul> <!-- /.sidebar-menu -->
            </section> <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="box box-default">
                    <div class="box-body">
                        <table>
                            <thead>
                                <tr>
                                    <th style="width: 20%">
                                        <h4> Decription of Activity:</h4>
                                    </th>
                                    <th style="width: 15%">
                                        <h4> Action Taken:</h4>
                                    </th>
                                    <th style="width: 10%">
                                        <h4>Person/s In-charge:</h4>
                                    </th>
                                    <th style="width: 15%">
                                        <h4>Remarks:</h4>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Receive duly approved requisitions</td>
                                    <td>Received a total of <input type="number" name="supplier" style="width:  15%" value="<?php echo $receivedRequest; ?>" /> requests</td>
                                    <td>Purchasing Officer<br>
                                        Purchasing Clerk<br>
                                        Work Student</td>
                                    <td><i>We receive approved requests from the Budget Office.</i></td>
                                </tr>

                                <tr>
                                    <td>Process received requests – includes preparation of canvass forms, canvassing of requests, coordinate with end users and coordinate with suppliers and processing of urgent requests</td>
                                    <td>Processed a total of <input type="number" name="supplier" style="width: 15%" value="<?php echo $processedRequest; ?>" /> requests
                                        <br><br>
                                        <input type="number" name="supplier" style="width: 15%" value="<?php echo $cashAdvance; ?>" /> cash advances <br>
                                        <input type="number" name="supplier" style="width: 15%" value="<?php echo $urgent; ?>" /> urgent requests </td>
                                    <td>Purchasing Officer<br>
                                        Purchasing Clerk<br>
                                        Work Student</td>
                                    <td><i>Some requests are divided into 2-3 requests wherein we divide the order to different suppliers and some are cash advances.</i></td>
                                </tr>

                                <tr>
                                    <td>Preparation of purchase orders</td>
                                    <td>Prepared <input type="number" name="supplier" style="width: 15%" value="<?php echo $preparedPo; ?>" /> purchase orders</td>
                                    <td>Purchasing Officer <br>
                                        Purchasing Clerk <br>
                                        Work Student</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Order approved purchase orders</td>
                                    <td>Prepared <input type="number" name="supplier" style="width: 15%" value="<?php echo $orderedPo; ?>" /> purchase orders</td>
                                    <td>Purchasing Officer<br><br>

                                        Purchasing Clerk<br>
                                        Work Student</td>
                                    <td><i>Approved purchase orders are faxed to suppliers, deliver personally or suppliers pick up their purchase order</i></td>
                                </tr>

                                <tr>
                                    <td>Process complete deliveries for payment</td>
                                    <td>Processed <input type="number" name="supplier" style="width: 15%" value /> purchase orders for
                                        payment.</td>
                                    <td>Purchasing Officer <br>
                                        Purchasing Clerk <br>
                                        Work Student</td>
                                    <td><i>A summary of payment is prepared and forwarded to Budget Office.</i></td>
                                </tr>

                                <tr>
                                    <td>Accommodate visiting suppliers (old and new)</td>
                                    <td>Accommodated<input type="number" name="supplier" style="width: 15%" value /> Suppliers in the office</textarea></td>
                                    <td>Purchasing Officer</td>
                                    <td><i>A log book of visiting suppliers is maintained at the Office.</i></td>
                                </tr>
                        </table>
                    </div>

                    <div class="box-footer">
                        <button class="btn btn-primary hidden-print pull-right" onclick="myFunction()">
                            <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>

                        <style>
                            @media print {

                                input,
                                textarea {
                                    border: 0 !important;
                                    border-style: none !important;
                                }
                            }
                        </style>
                        <script>
                            function myFunction() {
                                window.print();
                            }
                        </script>
            </section> <!-- /.content -->
        </div> <!-- /.content-wrapper -->

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

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>