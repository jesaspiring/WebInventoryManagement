<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Starter</title>
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
        <header class="main-header">

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
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">


                <!-- /.search form -->

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Inventory</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/PropertyCust/showDepartment'); ?>"><i class="fa fa-circle-o"></i> View Inventory</a></li>
                            <li><a href="<?php echo base_url('index.php/PropertyCust/physicalCount'); ?>"><i class="fa fa-circle-o"></i> Physical Count</a></li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-edit"></i> <span>History</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url('index.php/PropertyCust/displayRecentItems'); ?>"><i class="fa fa-circle-o"></i>Recently Added Items</a></li>
                                    <li><a href="<?php echo base_url('index.php/PropertyCust/displayRepairHistory'); ?>"><i class="fa fa-circle-o"></i>Repair History</a></li>
                                    <li><a href="<?php echo base_url('index.php/PropertyCust/displayTransferHistory'); ?>"><i class="fa fa-circle-o"></i>Transfer History</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Report</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/PropertyCust/view_rr'); ?>"><i class="fa fa-circle-o"></i> Receiving Report</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Incoming Items</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/PropertyCust/incoming_items'); ?>"><i class="fa fa-book"></i> <span>Incoming Purchase Order</span></a></li>
                            <li><a href="<?php echo base_url('index.php/PropertyCust/pending_po'); ?>"><i class="fa fa-book"></i> <span>Pending Purchase Order</span></a></li>
                            <li><a href="<?php echo base_url('index.php/PropertyCust/recently_added'); ?>"><i class="fa fa-book"></i> <span>Recently Added Orders</span></a></li>
                        </ul>
                    </li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <?php echo $this->session->userdata('department') ?>
                    <small>Welcome <?php echo $this->session->userdata('username'); ?></small>
                </h1>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="box box-default">
                    <div class="box-header">
                    </div> <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-9"></div> <!-- /.col -->
                            <div class="col-lg-3">
                                <div class="navbar-form" role="search">
                                    <div class="input-group add-on">
                                        <?php echo form_open('PropertyCust/history_result'); ?>
                                        <input class="form-control" placeholder="Control No" name="control_num" id="srch-term" type="text">
                                        <div class="input-group-btn">

                                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                            </form>
                                        </div> <!-- /.input-group-btn -->
                                    </div> <!-- /.input-group add-on -->
                                </div> <!-- navbar-form -->
                            </div>
                            <!--/.col-->
                        </div> <!-- /.row -->


                        <div class="row">
                            <div class="col-lg-2">
                                <h4>Control No.:</h4>
                            </div> <!-- /.col -->
                            <div class="col-lg-10">
                                <input type="text" value="<?php echo $item_details->control_number; ?>" readonly>
                            </div> <!-- /.col -->
                        </div> <!-- /.row -->

                        <div class="row">
                            <div class="col-lg-2">
                                <h4>Item:</h4>
                            </div> <!-- /.col -->
                            <div class="col-lg-10">
                                <input type="text" value="<?php echo $item_details->item_name; ?>" readonly>
                            </div> <!-- /.col -->
                        </div> <!-- /.row -->

                        <div class="row">
                            <div class="col-lg-2">
                                <h4>Department:</h4>
                            </div> <!-- /.col -->
                            <div class="col-lg-10">
                                <input type="text" value="<?php echo $item_details->deptName; ?>" readonly>
                            </div> <!-- /.col -->
                        </div> <!-- /.row -->

                        <div class="row">
                            <div class="col-lg-2">
                                <h4>Date Recieved:</h4>
                            </div> <!-- /.col -->
                            <div class="col-lg-10">
                                <input type="text" value="<?php echo $item_details->date_received; ?>" readonly>
                            </div> <!-- /.col -->
                        </div> <!-- /.row -->

                        <div class="row">
                            <div class="col-lg-2">
                                <h4>Status:</h4>
                            </div> <!-- /.col -->
                            <div class="col-lg-10">
                                <input type="text" value="<?php echo $item_details->status; ?>" readonly>
                            </div> <!-- /.col -->
                        </div> <!-- /.row -->

                        <h3><b>History</b></h3>
                        <br>
                        <section class="content">
                            <div class="box box-default">
                                <div class="box-body">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="jesiah-tab" data-toggle="tab" href="#transferHistory" role="tab" aria-controls="jesiah" aria-selected="true">Transfer History</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="aguilar-tab" data-toggle="tab" href="#repairHistory" role="tab" aria-controls="aguilar" aria-selected="false">Repair History</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade" id="transferHistory" role="tabpanel active" aria-labelledby="jesiah-tab">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 150px" class="text-center">
                                                            <h4>Date</h4>
                                                        </th>
                                                        <th style="width: 500px" class="text-center">
                                                            <h4>Description of Activity</h4>
                                                        </th>
                                                        <th style="width: 100px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($history as $details) :
                                                        ?>
                                                    <tr>
                                                        <td><?php echo $details->date; ?></td>
                                                        <td><?php echo $details->activity_description; ?></td>
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModalCenter<?php echo $details->transID; ?>">
                                                                View Details
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModalCenter<?php echo $details->transID; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <table class="table table-boredered">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>
                                                                                            <h4>ItemID</h4>
                                                                                        </th>
                                                                                        <th>
                                                                                            <h4>Item name</h4>
                                                                                        </th>
                                                                                        <th>
                                                                                            <h4>Transfer From</h4>
                                                                                        </th>
                                                                                        <th>
                                                                                            <h4>Transfer To</h4>
                                                                                        </th>
                                                                                        <th>
                                                                                            <h4>Date Transfered</h4>
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php foreach ($trans_history as $trans_detail) :
                                                                                            if ($trans_detail->transacID == $details->transID) {
                                                                                                ?>
                                                                                    <tr>
                                                                                        <td><?php echo $trans_detail->item_id; ?></td>
                                                                                        <td><?php echo $trans_detail->item_name; ?></td>
                                                                                        <td><?php echo $trans_detail->transfer_from; ?></td>
                                                                                        <td><?php echo $trans_detail->transfer_to; ?></td>
                                                                                        <td><?php echo $trans_detail->date_transfer; ?></td>
                                                                                    </tr>
                                                                                    <?php }
                                                                                        endforeach; ?>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>


                                        <div class="tab-pane fade" id="repairHistory" role="tabpanel active" aria-labelledby="aguilar-tab">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 150px" class="text-center">
                                                            <h4>Date</h4>
                                                        </th>
                                                        <th style="width: 500px" class="text-center">
                                                            <h4>Description of Activity</h4>
                                                        </th>
                                                        <th style="width: 100px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($rep_history as $details) :
                                                        ?>
                                                    <tr>
                                                        <td><?php echo $details->date; ?></td>
                                                        <td><?php echo $details->activity_description; ?></td>
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModalCenter1<?php echo $details->transID; ?>">
                                                                View Details
                                                            </button>

                                                            <!-- Modal -->
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModalCenter1<?php echo $details->transID; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <table class="table table-boredered">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>
                                                                                            <h4>Repair Type</h4>
                                                                                        </th>
                                                                                        <th>
                                                                                            <h4>Repair Location</h4>
                                                                                        </th>
                                                                                        <th>
                                                                                            <h4>Repair Date</h4>
                                                                                        </th>
                                                                                        <th>
                                                                                            <h4>Person In Charge</h4>
                                                                                        </th>
                                                                                        <th>
                                                                                            <h4>Remarks</h4>
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php foreach ($repair_history as $trans_detail) :
                                                                                            if ($trans_detail->transID == $details->transID) {
                                                                                                ?>
                                                                                    <tr>
                                                                                        <td><?php echo $trans_detail->repair_type; ?></td>
                                                                                        <td><?php echo $trans_detail->repair_location; ?></td>
                                                                                        <td><?php echo $trans_detail->repair_date; ?></td>
                                                                                        <td><?php echo $trans_detail->in_charge; ?></td>
                                                                                        <td><?php echo $trans_detail->remarks; ?></td>
                                                                                    </tr>
                                                                                    <?php }
                                                                                        endforeach; ?>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                        </div>
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
                                </div>
                            </div>
                        </section>
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

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>